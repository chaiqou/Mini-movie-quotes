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


// Log In

Route::get('login', [SessionController::class, 'create']);
Route::post('login', [SessionController::class, 'store']);


	Route::group(['middleware' => 'check.locale'], function(){

        Route::view('dashboard', 'dashboard');



    // admin movies


	Route::get('/movies', [AdminController::class, 'index']);
	Route::get('/movies/create', [AdminController::class, 'create']);
	Route::post('/movies', [AdminController::class, 'store']);
	Route::delete('/movies/{movie}', [AdminController::class, 'destroy']);
	Route::patch('/movies/{movie}', [AdminController::class, 'update']);
	Route::get('/movies/{movie}/edit', [AdminController::class, 'edit']);




    // admin quotes


	Route::get('/quotes', [AdminQuoteController::class, 'index']);
	Route::get('/quotes/create', [AdminQuoteController::class, 'create']);
	Route::post('/quotes', [AdminQuoteController::class, 'store']);
	Route::delete('/quotes/{quote}', [AdminQuoteController::class, 'destroy']);
	Route::patch('/quotes/{quote}', [AdminQuoteController::class, 'update']);
	Route::get('/quotes/{quote}/edit', [AdminQuoteController::class, 'edit']);

    // pages

    Route::get('/', [MovieController::class, 'index']);
    Route::get('/{movie}', [QuoteController::class, 'index'])->name('movie');




    });






// set language locale

    Route::get('set-locale/{locale}', function ($locale) {
           session()->put('locale', $locale);
           return redirect()->back();
          })->middleware('check.locale')->name('locale.setting');





