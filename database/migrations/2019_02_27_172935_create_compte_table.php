<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('compte', function(Blueprint $table)
		{
			$table->integer('MATCPT');
			$table->integer('SCPSCP');
			$table->text('NOMCPT', 65535);
			$table->integer('DPOSCP');
			$table->integer('GVRPNT');
			$table->integer('LOCPNT');
			$table->text('LIBGVR', 65535);
			$table->text('LIBLOC', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('compte');
	}

}
