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
		$imagePaths = ['images/matrix.jpg', 'images/taxi.jpg'];
		return [
			'quote'      => $this->faker->text(),
			'image_path' => $this->faker->randomElement($imagePaths),
			'movie_id'   => $this->faker->randomElement($moviesPath),
		];
	}
}
