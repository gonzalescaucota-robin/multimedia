<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleEvaluacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_evaluacions', function (Blueprint $table) {
            $table->id();
            $table->integer('nro_pregunta');
            $table->string('respuesta_estudiante');
            $table->integer('nota');

            //$table->unsignedBigInteger('id_tema');
            //$table->unsignedBigInteger('id_estudiante');
            
            //$table->foreign('id_tema')->references('id')->on('temas');
            //$table->foreign('id_estudiante')->references('id')->on('usuarios');

            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_evaluacions');
    }
}
