<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user', function(Blueprint $table) {
			$table->increments('user_id');
			$table->integer('role_id');
			$table->string('username',32);
			$table->string('password',128);
			$table->enum('status',array('Lock','Unlock'));
			$table->string('forgot_password_token',128);
			$table->boolean('hasWizard');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user');
	}

}
