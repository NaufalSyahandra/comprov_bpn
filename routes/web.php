<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PengaduanController;
use Illuminate\Support\Facades\Route;

// Halaman Beranda
Route::get('/', function () {
    return redirect('/beranda');
});

Route::get('/beranda', [LandingPageController::class, 'beranda'])->name('beranda');
Route::get('/tentang', [LandingPageController::class, 'tentang'])->name('tentang');
Route::get('/publikasi', [LandingPageController::class, 'publikasi'])->name('publikasi');
Route::get('/layanan', [LandingPageController::class, 'layanan'])->name('layanan');
Route::get('/layanan/cekberkas', [LandingPageController::class, 'layanan_cekberkas'])->name('layanan.cekberkas');
Route::get('/layanan/pengaduan', [LandingPageController::class, 'layanan_pengaduan'])->name('layanan.pengaduan');

// Halaman Login
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('login.form')->middleware('guest');

// Proses Login
Route::post('/admin/login', [AuthController::class, 'login'])->name('login');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute yang memerlukan autentikasi
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/admin/pengaduan', [PengaduanController::class, 'index'])->name('pengaduan');
});
