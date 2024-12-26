<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route untuk callback Midtrans
Route::post('transactions/midtrans-callback', [TransactionController::class, 'handleCallback']);

// // Route untuk mendapatkan status transaksi (contoh tambahan)
// Route::get('/transaction/{id}', [TransactionController::class, 'getTransactionStatus'])
//     ->name('transaction.status');

// Route lain jika diperlukan
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
