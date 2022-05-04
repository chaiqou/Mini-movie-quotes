<?php

namespace App\Http\Controllers;

class ListingsController extends Controller
{
	public function index()
	{
		return view('listings');
	}
}
