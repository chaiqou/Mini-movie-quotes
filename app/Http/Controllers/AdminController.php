<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
	public function index()
	{
		return view('admin.movies.index', [
			'movies' => Movie::all(),
		]);
	}

	public function create()  // create new movie
	{
		return view('admin.movies.create');
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

	public function edit(Movie $movie)
	{
		return view('admin.movies.edit', ['movie' => $movie]);
	}

	public function update(Movie $movie)
	{
		$attrubutes = request()->validate([
			'title'      => 'required',
			'image_path' => 'image',
		]);

		if (asset($attrubutes['image_path']))
		{
			$attrubutes['image_path'] = request()->file('image_path')->store('images');
		}

		$movie->update($attrubutes);
		return redirect('/movies');
	}

	public function destroy(Movie $movie)
	{
		$movie->delete();
		return redirect(asset('/movies'));
	}
}
