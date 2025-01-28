<?php

use Illuminate\Support\Facades\Route;

// Home route
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Login routes
Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('/login-user', [\App\Http\Controllers\AuthController::class, 'loginUser'])->name('login-user');

// Registration routes
Route::post('/registration', [\App\Http\Controllers\AuthController::class, 'registration'])->name('registration');
Route::get('/registration-user', [\App\Http\Controllers\AuthController::class, 'registerUser'])->name('register-user');

// Logout
Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
