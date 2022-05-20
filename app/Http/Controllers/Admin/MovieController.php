<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MovieStoreRequest;
use App\Models\Movie;
use App\Http\Controllers\Controller;
use App\Http\Requests\MovieUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class MovieController extends Controller
{
	public function index(): View
	{
		return view('admin.movies.index', [
			'movies' => Movie::latest()->paginate(10),
		]);
	}

	public function create(): View
	{
		return view('admin.movies.create');
	}

	public function store(MovieStoreRequest $request): RedirectResponse
	{
		$movie = Movie::create([
			'image_path' => request()->file('image_path')->store('images'),
			'title'      => $request->title,
		]);

		return redirect()->route('quote.create');
	}

	public function edit(Movie $movie): View
	{
		return view('admin.movies.edit', ['movie' => $movie]);
	}

	public function update(MovieUpdateRequest $request, Movie $movie): RedirectResponse
	{
		$validated = $request->validated();

		if (isset($validated['image_path']))
		{
			$validated['image_path'] = request()->file('image_path')->store('images');
		}

		$movie->update($validated);
		return redirect()->route('movies');
	}

	public function destroy(Movie $movie): RedirectResponse
	{

		$movie->delete();
		return redirect(asset('/movies'));
	}
}
