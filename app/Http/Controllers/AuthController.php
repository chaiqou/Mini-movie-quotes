<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AuthController extends Controller
{
	public function index(): View
	{
		return view('auth.login');
	}

	public function login(LoginRequest $request): RedirectResponse
	{
       $validated = $request->validated();
        if (auth()->attempt($validated))
		{
			session()->regenerate();
			return redirect()->route('dashboard');
		}



		throw ValidationException::withMessages(['email' => 'Your provided credentials could not be verified.']);
	}

	public function logout(): RedirectResponse
	{
		auth()->logout();
		return redirect()->route('home');
	}
}
