<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBranchTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('branch', function(Blueprint $table) {
			$table->integer('user_id');
			$table->string('branch_name',64);
			$table->text('branch_address');
			$table->string('branch_tel_no');
			$table->string('branch_mobile_no');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('branch');
	}

}
