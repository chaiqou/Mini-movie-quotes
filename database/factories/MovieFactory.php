<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition()
	{
		$imagePaths = ['images/matrix.jpg', 'images/taxi.jpg', 'images/nobody.jpg', 'images/joker.jpg'];

		return [
			'title'      => $this->faker->sentence(),
			'image_path' => $this->faker->randomElement($imagePaths),
		];
	}
}
