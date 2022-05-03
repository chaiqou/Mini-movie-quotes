<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('main');
});

Route::get('/listing', function () {
	return view('listing');
});
