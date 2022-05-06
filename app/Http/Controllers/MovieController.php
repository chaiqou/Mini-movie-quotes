<?php

namespace App\Http\Controllers;

use App\Models\Quote;

class MovieController extends Controller
{
	public function index()
	{
		$quote = Quote::inRandomOrder()->first(); // get random quote
		return view('home', ['quote' => $quote]);
	}

	public function create()
	{
		return view('movies.create');
	}
}
