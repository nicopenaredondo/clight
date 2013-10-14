<?php

class GroupsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('groups')->delete();
		Sentry::getGroupProvider()->create(array(
			'name' => 'SuperAdmin',
			'permissions' => array(
				'superadmin' => 1,
				'admin' => 1,
				'branch' => 1
				)
			));
		Sentry::getGroupProvider()->create(array(
			'name' => 'Administrator',
			'permissions' => array(
				'superadmin' => 0,
				'admin' => 1,
				'branch' => 0
				)
			));
		Sentry::getGroupProvider()->create(array(
			'name' => 'Branch',
			'permissions' => array(
				'superadmin' => 0,
				'admin' => 0,
				'branch' => 1
				)
			));
	}

}
