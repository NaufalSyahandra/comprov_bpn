<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CekBerkasController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\ProfileController;
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
Route::post('/layanan/pengaduan', [LandingPageController::class, 'layanan_pengaduan_store'])->name('layanan.kirim.pengaduan');

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
    Route::post('/admin/pengaduan/update/{id}', [PengaduanController::class, 'update'])->name('pengaduan.update');
    Route::get('/admin/cek-berkas', [CekBerkasController::class, 'index'])->name('cekberkas');
    Route::post('/admin/cek-berkas', [CekBerkasController::class, 'store'])->name('cekberkas.store');
    Route::get('/admin/cek-berkas/download/{id}', [CekBerkasController::class, 'download'])->name('cekberkas.download');
    Route::post('/admin/cek-berkas/update-status/{id}', [CekBerkasController::class, 'updateStatus'])->name('cekberkas.updateStatus');
    Route::get('/admin/profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('/admin/profile', [ProfileController::class, 'update'])->name('profile.update');
});

Route::middleware(['auth', 'can:superadmin'])->group(function () {
    Route::get('/admin/data-user', [DataUserController::class, 'index'])->name('user.index');
    Route::post('/admin/data-user', [DataUserController::class, 'store'])->name('user.store');
    Route::get('/admin/data-user/{id}/edit', [DataUserController::class, 'edit'])->name('user.edit');
    Route::put('/admin/data-user/{id}', [DataUserController::class, 'update'])->name('user.update');
    Route::delete('/admin/data-user/{id}', [DataUserController::class, 'destroy'])->name('user.destroy');
});
