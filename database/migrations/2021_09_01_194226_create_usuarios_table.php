<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombres',50);
            $table->string('apellidos',50);
            $table->string('genero',50);
            $table->integer('celular');
            $table->string('direccion',100);
            $table->string('usuario',50);
            $table->string('password');
            //$table->unsignedBigInteger('rol_id')->nullable();

            //$table->foreign('rol_id')
                    //->references('id')->on('rols')
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
        Schema::dropIfExists('usuarios');
    }
}
