<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\SessionController;

// dashboard
Route::view('dashboard', 'dashboard');

// Log In
Route::get('login', [SessionController::class, 'create']);
Route::post('login', [SessionController::class, 'store']);

// admin
Route::get('/movies', [AdminController::class, 'index'])->middleware('admin');
Route::get('/movies/create', [MovieController::class, 'create'])->middleware('admin');
Route::post('/movies', [MovieController::class, 'store'])->middleware('admin');
Route::get('/movies/{movie}/edit', [AdminController::class, 'edit'])->middleware('admin');

// pages
Route::get('/', [MovieController::class, 'index'])->name('home');
Route::get('/{movie}', [QuoteController::class, 'index'])->name('movie');
