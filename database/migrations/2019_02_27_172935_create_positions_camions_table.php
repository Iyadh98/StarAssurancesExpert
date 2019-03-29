<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePositionsCamionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('positions_camions', function(Blueprint $table)
		{
			$table->string('Date_P', 20);
			$table->integer('hh');
			$table->integer('mm');
			$table->integer('codecamion');
			$table->string('Longitude', 20);
			$table->string('Latitude', 20);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('positions_camions');
	}

}
