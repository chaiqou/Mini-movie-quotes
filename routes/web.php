<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\SessionController;

// Log In
Route::get('login', [SessionController::class, 'create']);
Route::post('login', [SessionController::class, 'store']);

// // admin
// Route::get('dashboard', function () {
// 	return view('admin.dashboard');
// });

// pages
Route::get('/', [FilmController::class, 'index'])->name('home');
Route::get('/{movie}', [QuoteController::class, 'index'])->name('movie');
