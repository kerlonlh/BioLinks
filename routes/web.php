<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegistrerController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['guest'])->group(function () {

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/register', [RegistrerController::class, 'index'])->name('register');
    Route::post('/register', [RegistrerController::class, 'register']);
    
});

Route::get('/logout', LogoutController::class)->middleware('auth')->name('logout');

Route::get('/dashboard', fn() => 'dashboard :: ' . Auth::user()->id)->middleware('auth')->name('dashboard');