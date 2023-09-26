<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historias', function (Blueprint $table) {
            $table->id();

            $table->integer('id_usuario');
            $table->integer('id_persona');
            $table->integer('id_horario');
            $table->integer('id_cargo');
            $table->integer('id_falta');

            $table->datetime('fecha');
            $table->time('ingresoam')->default('00:00')->nullable();
            $table->time('salidaam')->default('00:00')->nullable();
            $table->time('ingresopm')->default('00:00')->nullable();
            $table->time('salidapm')->default('00:00')->nullable();
            $table->integer('retrazo')->default('0')->nullable();
            $table->text('observacion')->default('')->nullable();
            $table->boolean('aceptado')->comment('si/no')->default(false);

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
        Schema::dropIfExists('historias');
    }
}
