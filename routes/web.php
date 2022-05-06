<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\SessionController;

// Log In
Route::get('login', [SessionController::class, 'create']);
Route::post('login', [SessionController::class, 'store']);

// pages
Route::get('/', [MovieController::class, 'index'])->name('home');
Route::get('/{movie}', [QuoteController::class, 'index'])->name('movie');

// admin
Route::post('/movies', [MovieController::class, 'store'])->middleware('admin');
Route::get('/movies/create', [MovieController::class, 'create'])->middleware('admin');
