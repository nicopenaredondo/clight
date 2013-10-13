<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJoCostInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jo_cost_info', function(Blueprint $table) {
			$table->integer('jo_id');
			$table->string('jci_labor_description',64);
			$table->integer('jci_labor_charges');
			$table->string('jci_parts_description',64);
			$table->integer('jci_parts_charges');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('jo_cost_info');
	}

}
