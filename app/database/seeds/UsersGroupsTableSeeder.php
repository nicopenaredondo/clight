<?php

class UsersGroupsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users_groups')->delete();

		$superAdminUser = Sentry::getUserProvider()->findByLogin('nico.penaredondo@gmail.com');
		$superAdminGroup = Sentry::getGroupProvider()->findByName('SuperAdmin');
		$superAdminUser->addGroup($superAdminGroup);
	}

}
