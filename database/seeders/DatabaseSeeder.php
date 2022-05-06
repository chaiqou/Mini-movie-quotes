<?php

namespace Database\Seeders;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		//Movie::factory(2)->create();
		Quote::factory(3)->create();
	}
}
