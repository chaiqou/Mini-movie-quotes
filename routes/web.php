<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\Admin\MovieController as AdminMovieController;
use App\Http\Controllers\Admin\QuoteController as AdminQuoteController;

Route::get('login', [AuthController::class, 'index'])->name('login.create');
	   Route::post('login', [AuthController::class, 'login'])->name('login.store');
	   Route::post('logout', [AuthController::class, 'logout'])->name('logout');

	   Route::group(['middleware' => 'check.locale'], function () {
	   	Route::view('dashboard', 'dashboard')->name('dashboard');

	   	// Movies
	   	Route::get('/movies', [AdminMovieController::class, 'index'])->name('movies');
	   	Route::get('/movies/create', [AdminMovieController::class, 'create'])->name('movie.create');
	   	Route::post('/movies', [AdminMovieController::class, 'store'])->name('movie.store');
	   	Route::get('/movies/{movie}/edit', [AdminMovieController::class, 'edit'])->name('movie.edit');
	   	Route::patch('/movies/{movie}', [AdminMovieController::class, 'update'])->name('movie.update');
	   	Route::delete('/movies/{movie}', [AdminMovieController::class, 'destroy'])->name('movie.destroy');

	   	// admin quotes
	   	Route::get('/quotes', [AdminQuoteController::class, 'index'])->name('quotes');
	   	Route::get('/quotes/create', [AdminQuoteController::class, 'create'])->name('quote.create');
	   	Route::post('/quotes', [AdminQuoteController::class, 'store'])->name('quote.store');
	   	Route::delete('/quotes/{quote}', [AdminQuoteController::class, 'destroy'])->name('quote.destroy');
	   	Route::patch('/quotes/{quote}', [AdminQuoteController::class, 'update'])->name('quote.update');
	   	Route::get('/quotes/{quote}/edit', [AdminQuoteController::class, 'edit'])->name('quote.edit');

	   	Route::get('/', [MovieController::class, 'index'])->name('home');
	   	Route::get('/{movie}', [QuoteController::class, 'index'])->name('movie');
	   });

	 // set language locale

		Route::get('set-locale/{locale}', [LanguageController::class, 'index'])->middleware('check.locale')->name('locale.setting');
