<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListingsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/{movie}', [ListingsController::class, 'index'])->name('movie');
