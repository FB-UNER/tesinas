<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTesinasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tesinas', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('titulo');
            $table->integer('alumno_id');
            $table->date('fecha_recepcion');
            $table->date('fecha_recepcion_director');
            $table->date('fecha_aprobacion_comision');
            $table->date('fecha_defensa');
            $table->integer('director_id');
            $table->integer('co_tutor_id');
            $table->integer('asesor_id');

            //aprobaciones
            $table->boolean('aprueba_comision_tfi');

            //Evaluadores
            $table->integer('evaluador_id_1');
            $table->integer('evaluador_id_2');
            $table->integer('evaluador_id_3');
            $table->date('fecha_designacion_eval_1');
            $table->date('fecha_designacion_eval_2');
            $table->date('fecha_designacion_eval_3');
            $table->date('fecha_entrega_eval_1');
            $table->date('fecha_entrega_eval_2');
            $table->date('fecha_entrega_eval_3');
            $table->boolean('modificacion_eval_1');
            $table->boolean('modificacion_eval_2');
            $table->boolean('modificacion_eval_3');
            $table->date('fecha_modificacion_eval_1');
            $table->date('fecha_modificacion_eval_2');
            $table->date('fecha_modificacion_eval_3');
            $table->date('fecha_aprobacion_eval_1');
            $table->date('fecha_aprobacion_eval_2');
            $table->date('fecha_aprobacion_eval_3');

            //$table->timestamps();
            //id_estado integer,
            //clase boolean,

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tesinas');
	}

}
