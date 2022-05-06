<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Validation\Rule;

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

	public function store()
	{
		$attrubutes = request()->validate([
			'title'      => ['required', Rule::unique('movies', 'title')],
			'image_path' => 'required|image',
			// 'quote' => ['required', Rule::unique('movies', 'quote')],
		]);

		$attrubutes['image_path'] = request()->file('image_path')->store('images'); // return path where the file stored

		Movie::create($attrubutes);

		return redirect('/');
	}
}
