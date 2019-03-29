<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProduitTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produit', function(Blueprint $table)
		{
			$table->integer('CODPRD');
			$table->text('LIBPRD', 65535);
			$table->integer('CODEMB');
			$table->text('LIBEMB', 65535);
			$table->char('TYPPRD', 1);
			$table->decimal('PDSPRD', 10, 0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('produit');
	}

}
