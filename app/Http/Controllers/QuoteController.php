<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;

class QuoteController extends Controller
{
	public function index(Movie $movie)
	{
		$quote = Quote::get()->where('movie_id', '=', $movie->id);
		return view('listings', ['quote' => $quote, 'movie' => $movie]);
	}
}
