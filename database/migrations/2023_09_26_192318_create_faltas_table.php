<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaltasTable extends Migration
{
    public function up()
    {
        Schema::create('faltas', function (Blueprint $table) {
            $table->id();
            
            $table->integer('id_usuario');
            $table->integer('id_persona');
            $table->string('persona');
            $table->string('falta');

            $table->datetime('fecha');
            $table->time('ingresoam')->default('00:00')->nullable();
            $table->time('salidaam')->default('00:00')->nullable();
            $table->time('ingresopm')->default('00:00')->nullable();
            $table->time('salidapm')->default('00:00')->nullable();
            $table->string('accion')->default('falta')->nullable()->comment('falta, atraso, permiso, feriado');
            $table->text('observacion')->default('')->nullable();
            $table->string('tipo')->default('personal')->nullable()->comment('personal,todo');
            $table->string('aprobado')->default('no')->nullable()->comment('no,si');
            //Justina 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('faltas');
    }
}
