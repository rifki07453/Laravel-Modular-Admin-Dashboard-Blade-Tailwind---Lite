<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/**
 * FILE: routes/web.php
 * 
 * @description This is where HTTP routes are defined.
 * It serves as the Entry Point connecting browser URLs with Controllers.
 */

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Main application routes. The '/' route automatically navigates visitors
| to the login portal.
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

/**
 * Dummy Authentication View Routes
 * 
 * Template buyers can remove these static routes
 * and uncomment `require __DIR__.'/auth.php';` if they install Laravel Breeze
 * and run real DB migrations.
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

// Handle POST request fallback to dashboard for simulating Login action
Route::post('/dashboard', [DashboardController::class, 'index'])->name('dashboard.sim');

// Dummy Logout Route
Route::post('/logout', function () {
    // In a real breeze application, this would call Auth::logout()
    return redirect()->route('login');
})->name('logout');


/**
 * Main Dashboard Route
 * 
 * In real life, the `auth` middleware is used to ensure
 * only logged-in users can access `/dashboard`.
 */
Route::get('/dashboard', [DashboardController::class, 'index'])
    // ->middleware(['auth', 'verified']) // Bypass temporarily for theme preview
    ->name('dashboard');


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

/**
 * These are the default routes from Laravel Breeze Auth.
 * Remove comments below when the real database Breeze login system is installed.
 */
// require __DIR__.'/auth.php';
