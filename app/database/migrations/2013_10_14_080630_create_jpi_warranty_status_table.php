<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJpiWarrantyStatusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jpi_warranty_status', function(Blueprint $table) {
			$table->increments('jpi_warranty_status_id');
			$table->string('jpi_warranty_status_name',32);
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
		Schema::drop('jpi_warranty_status');
	}

}
