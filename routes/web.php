<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminQuoteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\SessionController;

// dashboard

	Route::view('dashboard', 'dashboard');

// Log In

	Route::get('login', [SessionController::class, 'create']);
	Route::post('login', [SessionController::class, 'store']);

// admin movies

Route::middleware('admin')->group(function () {
	Route::get('/movies', [AdminController::class, 'index']);
	Route::get('/movies/create', [AdminController::class, 'create']);
	Route::post('/movies', [AdminController::class, 'store']);
	Route::delete('/movies/{movie}', [AdminController::class, 'destroy']);
	Route::put('/movies/{movie}', [AdminController::class, 'update']);
	Route::get('/movies/{movie}/edit', [AdminController::class, 'edit']);
});

// admin quotes
	Route::get('/quotes', [AdminQuoteController::class, 'index']);
	Route::get('/quotes/create', [AdminQuoteController::class, 'create']);
	Route::post('/quotes', [AdminQuoteController::class, 'store']);

// pages

	Route::get('/', [MovieController::class, 'index'])->name('home');
	Route::get('/{movie}', [QuoteController::class, 'index'])->name('movie');
