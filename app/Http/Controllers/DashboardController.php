<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil transaksi yang sudah dibayar oleh user yang sedang login
        $transactions = Transaction::where('user_id', auth()->id())
            ->where('payment_status', 'success')  // Status pembayaran success
            ->with('course')  // Mengambil data kursus yang terkait dengan transaksi
            ->get();

        return view('dashboard', compact('transactions'));
    }
}

