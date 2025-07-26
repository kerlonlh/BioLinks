<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistrerController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegistrerController::class, 'index'])->name('register');
Route::post('/register', [RegistrerController::class, 'register']);

Route::get('/dashboard', fn()=> 'dashboard :: ' . Auth::user()->id)->middleware('auth')->name('dashboard');