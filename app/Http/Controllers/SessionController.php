<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
	public function create()
	{
		return view('sessions.create');
	}

	public function store()
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
			return redirect('/dashboard');
		}

		// failed auth

		throw ValidationException::withMessages(['email' => 'Your provided credentials could not be verified.']);
	}


    public function destroy()
    {
        auth()->logout();
        return redirect('/');
    }


}
