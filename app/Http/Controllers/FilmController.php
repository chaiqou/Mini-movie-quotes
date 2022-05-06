<?php

namespace App\Http\Controllers;

use App\Models\Quote;

class FilmController extends Controller
{
	public function index()
	{
		$quote = Quote::inRandomOrder()->first(); // get random quote

		return view('home', ['quote' => $quote]);
	}
}
