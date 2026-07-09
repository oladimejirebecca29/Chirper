<?php

use App\Http\Controllers\ChirpController;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\Auth\Login;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', [ChirpController::class, 'index']);

// Protected Chirp Routes
Route::middleware('auth')->group(function () {
    Route::resource('chirps', ChirpController::class)
        ->only(['store', 'edit', 'update', 'destroy']);
    
    // Logout (Only one definition needed)
    Route::post('/logout', Logout::class)
        ->name('logout');
});

// Guest Routes
Route::middleware('guest')->group(function () {
    Route::view('/signup', 'auth.register')->name('signup');
    Route::post('/signup', Register::class);

    Route::view('/login', 'auth.login')->name('login');
    Route::post('/login', Login::class);
});