<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();
		Sentry::getUserProvider()->create(array(
				'username' => 'nico.penaredondo',
				'password' => 'niconico',
				'email' => 'nico.penaredondo@gmail.com',
				'activated' => 1,
				'activation_code' => Hash::make(date('YmdHis')),
				'activated_at' => date('Y-m-d H:i:s'),
				'reset_password_code' => md5('RESET' . date('Y-m-d H:i:s')),
				'first_name' => 'Nico',
				'last_name' => 'Penaredondo'
			));	
	}

}
