<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;

class QuoteController extends Controller
{
	public function index(Movie $movie)
	{
		$quote = Quote::where('movie_id', $movie->id)->get();
		return view('listings', ['quote' => $quote, 'movie' => $movie]);
	}
}
