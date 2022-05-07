<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class AdminController extends Controller
{
	public function index()
	{
		return view('admin.movies.index', [
			'movies' => Movie::all(),
		]);
	}
}
