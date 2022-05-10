<?php

use App\Models\Quote;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\AdminQuoteController;
use App\Http\Middleware\CheckLocale;
use GuzzleHttp\Middleware;

    // Log In

    Route::get('login', [SessionController::class, 'create'])->name('login.create');
    Route::post('login', [SessionController::class, 'store'])->name('login.store');
    Route::post('logout', [SessionController::class, 'destroy'])->name('logout');


	Route::group(['middleware' => 'check.locale'], function(){


   // static dashboard

    Route::view('dashboard', 'dashboard')->name('dashboard')->Middleware('admin');



    // admin movies


	Route::get('/movies', [AdminController::class, 'index'])->name('movies')->Middleware('admin');;
	Route::get('/movies/create', [AdminController::class, 'create'])->name('movie.create')->Middleware('admin');;
	Route::post('/movies', [AdminController::class, 'store'])->name('movie.store')->Middleware('admin');;
	Route::delete('/movies/{movie}', [AdminController::class, 'destroy'])->name('movie.destroy')->Middleware('admin');;
	Route::patch('/movies/{movie}', [AdminController::class, 'update'])->name('movie.update')->Middleware('admin');;
	Route::get('/movies/{movie}/edit', [AdminController::class, 'edit'])->name('movie.edit')->Middleware('admin');;




    // admin quotes


	Route::get('/quotes', [AdminQuoteController::class, 'index'])->name('quotes')->Middleware('admin');;
	Route::get('/quotes/create', [AdminQuoteController::class, 'create'])->name('quote.create')->Middleware('admin');;
	Route::post('/quotes', [AdminQuoteController::class, 'store'])->name('quote.store')->Middleware('admin');;
	Route::delete('/quotes/{quote}', [AdminQuoteController::class, 'destroy'])->name('quote.destroy')->Middleware('admin');;
	Route::patch('/quotes/{quote}', [AdminQuoteController::class, 'update'])->name('quote.update')->Middleware('admin');;
	Route::get('/quotes/{quote}/edit', [AdminQuoteController::class, 'edit'])->name('quote.edit')->Middleware('admin');;

    // pages

    Route::get('/', [MovieController::class, 'index'])->name('home');
    Route::get('/{movie}', [QuoteController::class, 'index'])->name('movie');




    });






// set language locale

    Route::get('set-locale/{locale}', function ($locale) {
           session()->put('locale', $locale);
           return redirect()->back();
          })->middleware('check.locale')->name('locale.setting');





