<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Login routes
Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('/login-user', [\App\Http\Controllers\AuthController::class, 'loginUser'])->name('login-user');

// Registration routes
Route::get('/signup', [\App\Http\Controllers\AuthController::class, 'register']);
Route::post('/register-user', [\App\Http\Controllers\AuthController::class, 'registerUser'])->name('register-user');

Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
