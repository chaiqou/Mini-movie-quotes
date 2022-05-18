<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuoteStoreRequest;
use App\Models\Quote;
use Illuminate\Validation\Rule;

class AdminQuoteController extends Controller
{
	public function index()
	{
		return view('admin.quotes.index', [
			'quotes' => Quote::latest()->paginate(2),
		]);
	}

	public function create()
	{
		return view('admin.quotes.create');
	}

	public function store(QuoteStoreRequest $request)
	{
		$quote = new Quote;
		$quote->movie_id = request()->movie_id;
		$quote->setTranslations('quote', $request->input('quote'));
		$quote->save();

		return redirect()->route('home');
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
		return redirect()->route('quotes');
	}

	public function destroy(Quote $quote)
	{
		$quote->delete();
		return redirect(asset('/quotes'));
	}
}
