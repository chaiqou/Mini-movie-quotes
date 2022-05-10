<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class QuoteStoreRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return Auth::check();
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, mixed>
	 */
	public function rules()
	{
		$rules = [
			'quote.en' => 'required',
			'movie_id' => ['required', 'numeric'],
		];

		foreach (config('app.available_locales') as $locale)
		{
			$rules['quote.' . $locale] = 'string';
		}

		return $rules;
	}
}
