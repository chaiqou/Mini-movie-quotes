<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Validation\Rule;

class QuoteController extends Controller
{
	public function index(Movie $movie)
	{
		$quote = Quote::get()->where('movie_id', '=', $movie->id);
		return view('listings', ['quote' => $quote, 'movie' => $movie]);
	}

	public function create()
	{
		return view('admin.quotes.create');
	}

	public function store()
	{
		$attributes = request()->validate([
			'quote'    => 'required',
			'movie_id' => ['required', Rule::exists('movies', 'id')],
		]);

		Quote::create($attributes);

		return redirect('/dashboard');
	}
}
