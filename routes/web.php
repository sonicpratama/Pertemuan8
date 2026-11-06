
<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/dashboard');

// ========================================
// Login dan Register (Guest)
// ========================================
Route::middleware('guest')->group(function () {

    // Login
    Route::get('login', [LoginController::class, 'create'])
        ->name('login');

    Route::post('login', [LoginController::class, 'store'])
        ->name('login.store');

    // Register
    Route::get('register', [RegisterController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisterController::class, 'store'])
        ->name('register.store');

});

// ========================================
// Semua Pengguna yang Sudah Login
// ========================================
Route::middleware('auth')->group(function () {

    // Dashboard
    Route::get('dashboard', DashboardController::class)
        ->name('dashboard');

    // Logout
    Route::post('logout', [LoginController::class, 'destroy'])
        ->name('logout');

});
