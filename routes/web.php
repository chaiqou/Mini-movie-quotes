<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListingsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/listings', [ListingsController::class, 'index']);
