<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJoPhoneInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jo_phone_info', function(Blueprint $table) {
			$table->integer('jo_id');
			$table->string('jpi_network',32);
			$table->string('jpi_brandh',32);
			$table->string('jpi_accessories',32);
			$table->string('jpi_imei',32);
			$table->string('jpi_serial_no',32);
			$table->date('jpi_date_purchase');
			$table->string('jpi_warranty_status',32);
			$table->string('jpi_status',32);
			$table->text('complaint');
			$table->text('remarks');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('jo_phone_info');
	}

}
