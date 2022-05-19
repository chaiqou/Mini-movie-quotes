<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quote>
 */
class QuoteFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition()
	{
		$moviesPath = Movie::all()->pluck('id')->toArray();

		return [
			'quote'      => $this->faker->text(),
			'movie_id'   => $this->faker->randomElement($moviesPath),
		];
	}
}
