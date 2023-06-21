<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_usuario');
            $table->string('titulo')->comment('2022 Jeep Gladiator Willys');
            
            $table->string('marca')->default('')->nullable->comment('Toyota');
            $table->string('motor')->default('')->nullable->comment('Nose');
            $table->string('tipo')->comment('Camioneta');
            $table->string('combustible')->comment('Gasolina');
            $table->string('anio')->comment('2022');
            $table->string('color')->comment('Verde');
            $table->string('color_interior')->comment('Negro – Plomo');
            $table->string('wheels')->comment('LT 255/75SR17C');
            $table->string('traccion')->comment('4×4');
            
            $table->string('foto1');
            $table->string('foto2');
            $table->string('foto3');
            $table->string('foto4');
            $table->string('foto5');
            $table->string('foto6');

            $table->string('ficha');
            $table->string('comunicate');
            $table->string('correo');

            $table->boolean('activo')->comment('si/no')->default(true);
            $table->boolean('popular')->comment('si/no')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vehiculos');
    }
}

