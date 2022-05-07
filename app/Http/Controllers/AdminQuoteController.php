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
}
