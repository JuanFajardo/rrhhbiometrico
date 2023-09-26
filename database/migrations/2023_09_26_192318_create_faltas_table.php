<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaltasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faltas', function (Blueprint $table) {
            $table->id();
            
            $table->integer('id_usuario');
            $table->integer('id_persona');
            $table->integer('id_horario');
            $table->integer('id_cargo');

            $table->datetime('fecha');
            $table->time('ingresoam')->default('00:00')->nullable();
            $table->time('salidaam')->default('00:00')->nullable();
            $table->time('ingresopm')->default('00:00')->nullable();
            $table->time('salidapm')->default('00:00')->nullable();
            $table->string('tipo')->default('falta')->nullable()->comment('falta,atraso,permiso');
            $table->text('observacion')->default('')->nullable();

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
        Schema::dropIfExists('faltas');
    }
}
