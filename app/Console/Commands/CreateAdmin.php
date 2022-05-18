<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateAdmin extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'create:admin {--username=} {--email=} {--password=}';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Creates a new admin';

	/**
	 * Execute the console command.
	 *
	 * @return int
	 */
	public function handle()
	{
		$username = $this->option('username');
		$email = $this->option('email');
		$password = $this->option('password');

		User::create([
			'username'     => $username,
			'email'        => $email,
			'password'     => bcrypt($password),
		]);

		$this->info("Admin successfully created ^_^ email: $email username: $username password: $password");
	}
}
