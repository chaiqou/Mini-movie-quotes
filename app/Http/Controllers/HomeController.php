<?php

namespace App\Http\Controllers;

use App\Models\Quote;

class HomeController extends Controller
{
	public function index()
	{
		$quote = Quote::inRandomOrder()->first(); // get random quote

		return view('home', ['quote' => $quote]);
	}
}
