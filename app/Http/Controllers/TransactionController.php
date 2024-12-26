<?php

namespace App\Http\Controllers;

use Midtrans\Snap;
use Midtrans\Config;
use App\Models\Course;
use Midtrans\Notification;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TransactionController extends Controller
{

    public function __construct()
    {
        // Konfigurasi Midtrans
        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$isProduction = config('services.midtrans.isProduction');
        Config::$isSanitized = config('services.midtrans.isSanitized');
        Config::$is3ds = config('services.midtrans.is3ds');
    }
    public function buy(Course $course)
    {
        return view('transactions.buy', compact('course'));
    }

    public function checkout(Request $request, Course $course)
    {
        Log::info('Checkout called for course: ' . $course->name);

        // Pastikan user sudah login
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Please login to proceed with payment.');
        }

        // Validasi input schedule (pilihan hari dan waktu)
        $validated = $request->validate([
            'schedule_day' => 'required|string',
            'schedule_time' => 'required|string',
        ]);

        // Log yang diterima dari form
        Log::info('Schedule Day: ' . $validated['schedule_day']);
        Log::info('Schedule Time: ' . $validated['schedule_time']);

        // Cek apakah jadwal penuh
        $courseScheduleCount = Transaction::where('course_id', $course->id)
            ->where('schedule_day', $validated['schedule_day'])
            ->where('schedule_time', $validated['schedule_time'])
            ->where('payment_status', 'success')
            ->count();

        if ($courseScheduleCount >= 4) {
            return redirect()->back()->with('error', 'This schedule is already full.');
        }

        // Membuat transaksi
        $transaction = Transaction::create([
            'user_id' => auth()->id(),
            'course_id' => $course->id,
            'payment_status' => 'pending', // Status awal pending
            'schedule_day' => $validated['schedule_day'],
            'schedule_time' => $validated['schedule_time'],
        ]);

        // Midtrans snap payment
        $snap = new Snap;
        $midtransResponse = Snap::createTransaction([
            'transaction_details' => [
                'order_id' => $transaction->id,
                'gross_amount' => $course->price,
            ],
            'item_details' => [
                [
                    'id' => $course->id,
                    'name' => $course->name,
                    'price' => $course->price,
                    'quantity' => 1,
                ],
            ],
            'callbacks' => [
                'notification_url' => 'https://4aaf-114-79-21-117.ngrok-free.app/api/transactions/midtrans-callback',
            ],
        ]);


        // Pastikan ada redirect_url dan token dalam respons
        if (isset($midtransResponse->redirect_url) && isset($midtransResponse->token)) {
            $transaction->update([
                'midtrans_url' => $midtransResponse->redirect_url,
                'midtrans_booking_code' => $midtransResponse->token,
            ]);
        }

        // Redirect ke halaman pembayaran Midtrans
        return redirect($midtransResponse->redirect_url);
    }




    public function midtransCallback(Request $request)
    {
        // Inisialisasi Midtrans Notification
        $notification = new Notification();

        // Ambil data transaksi dari Midtrans Notification
        $transaction = Transaction::where('midtrans_booking_code', $notification->order_id)->first();

        if (!$transaction) {
            return response()->json(['status' => 'error', 'message' => 'Transaction not found'], 404);
        }

        Log::info();
        // Cek status transaksi yang dikirim oleh Midtrans
        switch ($notification->transaction_status) {
            case 'capture':
                // Pembayaran berhasil
                if ($notification->fraud_status == 'accept') {
                    $transaction->update(['payment_status' => 'success']);
                } else {
                    // Pembayaran gagal karena kecurangan
                    $transaction->update(['payment_status' => 'failed']);
                }
                break;

            case 'settlement':
                // Pembayaran berhasil dan sudah diselesaikan
                $transaction->update(['payment_status' => 'success']);
                break;

            case 'pending':
                // Pembayaran masih menunggu
                $transaction->update(['payment_status' => 'pending']);
                break;

            case 'cancel':
            case 'deny':
                // Pembayaran dibatalkan
                $transaction->update(['payment_status' => 'failed']);
                break;

            default:
                // Status lainnya
                $transaction->update(['payment_status' => 'failed']);
                break;
        }

        return response()->json(['status' => 'success', 'message' => 'Transaction status updated']);
    }

    // public function success(Request $request)
    // {
    //     $orderId = $request->input('order_id');
    //     $transaction = Transaction::where('midtrans_booking_code', $orderId)->first();

    //     if ($transaction) {
    //         $transaction->update(['payment_status' => 'success']);
    //     }

    //     return redirect()->route('dashboard');
    // }

    // public function failed(Request $request)
    // {
    //     $orderId = $request->input('order_id');
    //     $transaction = Transaction::where('midtrans_booking_code', $orderId)->first();

    //     if ($transaction) {
    //         $transaction->update(['payment_status' => 'failed']);
    //     }

    //     return redirect()->route('dashboard');
    // }

    // public function handleCallback(Request $request)
    // {
    //     // Konfigurasi server key untuk verifikasi signature key
    //     $serverKey = config('services.midtrans.serverKey');
    //     $hashed = hash('sha512', $request->order_id . $request->status_code . $request->gross_amount . $serverKey);

    //     if ($hashed === $request->signature_key) {
    //         $transaction = Transaction::where('id', $request->order_id)->first();

    //         if ($transaction) {
    //             $transaction->update(['payment_status' => $request->transaction_status]);
    //         }
    //     }

    //     return response()->json(['message' => 'Callback received']);
    // }

    public function handleCallback(Request $request)
    {
        // Verifikasi signature key dan logika untuk pembaruan status transaksi
        $serverKey = config('services.midtrans.serverKey');
        $hashed = hash('sha512', $request->order_id . $request->status_code . $request->gross_amount . $serverKey);

        if ($hashed === $request->signature_key) {
            $transaction = Transaction::where('midtrans_booking_code', $request->order_id)->first();

            if ($transaction) {
                if ($request->transaction_status === 'settlement') {
                    $transaction->update(['payment_status' => 'success']);
                } elseif ($request->transaction_status === 'pending') {
                    $transaction->update(['payment_status' => 'pending']);
                } elseif ($request->transaction_status === 'cancel' || $request->transaction_status === 'deny') {
                    $transaction->update(['payment_status' => 'failed']);
                }
            }
        }

        return response()->json(['message' => 'Callback received']);
    }



}
