<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// redirect awal ke login
Route::get('/', function () {
    return redirect('/login');
});

// register
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register'])->name('register');

// login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// dashboard
Route::get('/dashboard', [AuthController::class, 'dashboard']);

// logout
Route::get('/logout', [AuthController::class, 'logout']);