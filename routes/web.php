<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/**
 * FILE: routes/web.php
 * 
 * @description Di sinilah rute HTTP aplikasi didefinisikan.
 * Ini adalah Entry Point penghubung URL di browser dengan Controller.
 */

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Rute utama aplikasi. Rute pertama '/' menavigasikan pengunjung
| otomatis ke halaman login, menyerupai portal tersembunyi bagi admin.
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

/**
 * Route View Autentikasi Dummy
 * 
 * Pembeli template bisa membuang rute statis ini 
 * dan meng-uncomment `require __DIR__.'/auth.php';` jika mereka menginstal Laravel Breeze
 * dan melakukan migrasi DB sungguhan.
 */
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request');

// Handle POST request fallback ke dashboard untuk simulasi click Login -> Masuk
Route::post('/dashboard', [DashboardController::class, 'index'])->name('dashboard.sim');


/**
 * Route Dashboard Utama
 * 
 * Di kehidupan nyata, baris middleware `auth` digunakan untuk memastikan 
 * hanya user yang sudah login bisa masuk ke `/dashboard`.
 * 
 * Struktur Rute Pemula:
 * Route::get('/url', [NamaController::class, 'namaMethod']);
 */
Route::get('/dashboard', [DashboardController::class, 'index'])
    // ->middleware(['auth', 'verified']) // Bypass sementara untuk preview theme
    ->name('dashboard');


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

/**
 * Ini adalah rute bawaan dari Laravel Breeze Auth.
 * Hapus komentar di bawah ini bila sistem login Breeze database sesungguhnya dipasang.
 */
// require __DIR__.'/auth.php';
