<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return view('landing');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/about', function () {
        return view('about');
    })->name('about');
    Route::get('/beranda', function () {
        return view('beranda');
    })->name('beranda');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/courses', [CourseController::class,'index'])->name('courses.index');
    Route::get('/courses/{course}', [CourseController::class, 'show'])->name('courses.show');
    //Route::post('transactions/midtrans-callback', [TransactionController::class, 'handleCallback']);
    Route::post('transactions/checkout/{course}', [TransactionController::class, 'checkout'])->name('transactions.checkout');
//Route::get('transactions/callback', [TransactionController::class, 'midtransCallback']);
    

    Route::get('transactions/success', [TransactionController::class, 'success'])->name('transactions.success');
    Route::get('transactions/failed', [TransactionController::class, 'failed'])->name('transactions.failed');
    // Tampilkan daftar materi kelas yang sudah dibeli
    Route::get('/courses/{course}/materials', [MaterialController::class, 'show'])->name('materials.show');
    
    // Tampilkan file PDF materi
    Route::get('/materials/{material}/view', [MaterialController::class, 'viewPdf'])->name('materials.view');
});

Route::post('/midtrans-callback', [TransactionController::class, 'handleCallback']);
// Route::view('/', 'welcome');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
