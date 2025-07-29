<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegistrerController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['guest'])->group(function () {

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/register', [RegistrerController::class, 'index'])->name('register');
    Route::post('/register', [RegistrerController::class, 'register']);
    
});

Route::middleware(['auth'])->group(function () {

    Route::get('/links/create', [LinkController::class, 'create'])->name('links.create');
    Route::post('/links/create', [LinkController::class, 'store']);

    Route::get('/dashboard', fn() => 'dashboard :: ' . Auth::user()->id)->name('dashboard');
    Route::get('/logout', LogoutController::class)->name('logout');

});