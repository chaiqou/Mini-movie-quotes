<?php

namespace App\Http\Controllers\Admin;

use App\Models\Movie;
use App\Models\Quote;
use App\Http\Controllers\Controller;
use App\Http\Requests\QuoteStoreRequest;
use App\Http\Requests\QuoteUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class QuoteController extends Controller
{
	public function index(): View
	{
		return view('admin.quotes.index', [
			'quotes' => Quote::latest()->paginate(2),
		]);
	}

	public function create(): View
	{
		$dbmovies = Movie::all();

		return view('admin.quotes.create', ['movies' => $dbmovies]);
	}

	public function store(QuoteStoreRequest $request): RedirectResponse
	{
		Quote::create([
			'movie_id' => $request->movie_id,
			'quote'    => $request->quote,
		]);

		return redirect()->route('home');
	}

	public function edit(Quote $quote): View
	{
		$dbmovies = Movie::all();

		return view('admin.quotes.edit', ['quote' => $quote, 'movies' => $dbmovies]);
	}

	public function update(QuoteUpdateRequest $request, Quote $quote): RedirectResponse
	{
		$validated = $request->validated();

		$quote->update($validated);
		return redirect()->route('quotes');
	}

	public function destroy(Quote $quote): RedirectResponse
	{
		$quote->delete();
		return redirect(asset('/quotes'));
	}
}
