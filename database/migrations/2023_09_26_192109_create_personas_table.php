<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();

            $table->integer('id_usuario');
            $table->integer('id_cargo');
            $table->integer('id_horario');

            $table->integer('id_biometrico');
            $table->string('nombre_biometrico');

            $table->string('nombre')->default('')->nullable();
            $table->string('paterno')->default('')->nullable();
            $table->string('materno')->default('')->nullable();
            $table->string('ci')->default('')->nullable();
            $table->string('celular')->default('')->nullable();
            $table->string('direccion')->default('')->nullable();

            $table->boolean('activo')->comment('si/no')->default(true);
            
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
