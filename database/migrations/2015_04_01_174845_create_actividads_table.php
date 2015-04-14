<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('actividads', function(Blueprint $table) {

            $table->increments('id');
            $table->text('estrategia');
			$table->text('cognoscitivo');
			$table->string('actividad');
			$table->text('descripcion');
			$table->text('objetivo');
			$table->text('opcionuno');
			$table->text('opciondos');
			$table->text('opciontres');
			$table->string('valoractividad');
			$table->string('unidad');
			$table->string('evidencia');
			$table->text('caracteristicas');
			$table->text('realizacion');
			$table->string('fecha');
			$table->string('codigoactividad');
			$table->string('materia');
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
		Schema::drop('actividads');
	}

}
