<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacions', function (Blueprint $table) {
            $table->id();
            $table->text('descripcion');
            $table->date('fecha');
            $table->string('nota_evaluacion',50);

            //$table->unsignedBigInteger('id_tema')->nullable();
            //$table->unsignedBigInteger('id_usuario')->nullable();

            //$table->foreign('id_tema')
                    //->references('id')->on('temas')
                    //->onDelete('set null');
            //$table->foreign('id_usuario')
                    //->references('id')->on('usuarios')
                    //->onDelete('set null');
           
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
        Schema::dropIfExists('evaluacions');
    }
}
