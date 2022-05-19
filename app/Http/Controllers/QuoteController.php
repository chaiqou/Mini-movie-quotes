<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\View\View;

class QuoteController extends Controller
{
	public function index(Movie $movie): View
	{
		$quote = Quote::where('movie_id', $movie->id)->get();
		return view('listings', ['quote' => $quote, 'movie' => $movie]);
	}
}
