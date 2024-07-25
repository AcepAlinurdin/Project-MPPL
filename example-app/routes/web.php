<?php

use App\Http\Controllers\PemesananController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them
| will be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Dashboard route for authenticated users
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Authenticated routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Pemesanan routes
    Route::get('/pemesanan', [PemesananController::class, 'create'])->name('pemesanan');
    Route::post('/pemesanan', [PemesananController::class, 'store'])->name('pemesanan.store');
    Route::get('/pemesanan/create', [PemesananController::class, 'create'])->name('pemesanan.create');
    Route::get('/pemesanan/success', [PemesananController::class, 'success'])->name('pemesanan.success');
    // Route::get('/pemesanan', [PemesananController::class, 'index'])->name('pemesanan');
    
    // Artikel route
    Route::get('/artikel', function () {
        return view('artikel');
    })->name('artikel');
    
    Route::get('/notifikasi', [PemesananController::class, 'index2'])->name('notifikasi');

    // Pembayaran route
    Route::get('/Pembayaran', [PemesananController::class, 'Pembayaran'])->name('bukti_pembayaran');
});

// Menambahkan rute untuk menampilkan daftar pemesanan
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [PemesananController::class, 'index'])->name('admin');
});


// web.php
Route::post('/pemesanan/update-status/{id}', [PemesananController::class, 'updateStatus'])->name('pemesanan.updateStatus');

// Default authentication routes
require __DIR__.'/auth.php';
