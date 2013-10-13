<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJoBasicInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jo_basic_info', function(Blueprint $table) {
			$table->increments('jo_id');
			$table->integer('branch_id');
			$table->string('jo_customer_name',128);
			$table->date('jo_date_issue');
			$table->date('jo_date_release');
			$table->string('jo_technician',128);
			$table->string('jo_csr',128);	
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
		Schema::drop('jo_basic_info');
	}

}
