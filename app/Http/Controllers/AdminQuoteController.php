<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Validation\Rule;

class AdminQuoteController extends Controller
{
	public function index()
	{
		return view('admin.quotes.index', [
			'quotes' => Quote::all(),
		]);
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

	public function edit(Quote $quote)
	{
		return view('admin.quotes.edit', ['quote' => $quote]);
	}

	public function update(Quote $quote)
	{
		$attrubutes = request()->validate([
			'quote'    => 'required',
			'movie_id' => ['required', Rule::exists('movies', 'id')],
		]);

		$quote->update($attrubutes);
	}

	public function destroy(Quote $quote)
	{
		$quote->delete();
		return redirect(asset('/quotes'));
	}
}
