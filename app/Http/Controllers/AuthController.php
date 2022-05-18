<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
	public function index()
	{
		return view('auth.login');
	}

	public function login()
	{
		// validate request
		$attributes = request()->validate([
			'email'    => 'required|email',
			'password' => 'required',
		]);

		// attempt to authenticate and login admin , based on provided credentials

		if (auth()->attempt($attributes))
		{
			session()->regenerate();
			return redirect()->route('dashboard');
		}

		// failed auth

		throw ValidationException::withMessages(['email' => 'Your provided credentials could not be verified.']);
	}

	public function logout()
	{
		auth()->logout();
		return redirect()->route('home');
	}
}
