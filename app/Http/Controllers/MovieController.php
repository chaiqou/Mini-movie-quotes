<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\View\View;

class MovieController extends Controller
{
	public function index(): View
	{
		$quote = Quote::inRandomOrder()->first();
		return view('home', ['quote' => $quote]);
	}
}
