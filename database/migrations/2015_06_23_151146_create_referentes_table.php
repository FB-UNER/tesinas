<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferentesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('referentes', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('full_name');
            $table->integer('dni');
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
		Schema::drop('referentes');
	}

}
