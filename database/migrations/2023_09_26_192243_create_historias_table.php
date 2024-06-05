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

            $table->integer('id_usuario')->nullable();
            $table->integer('id_persona')->nullable();
            $table->string('persona')->nullable();
            $table->integer('id_horario')->nullable();
            $table->string('horario')->nullable();
            $table->integer('id_cargo')->nullable();
            $table->string('cargo')->nullable();
            $table->integer('id_falta')->nullable();
            $table->string('falta')->nullable();

            $table->integer('id_biometrico');
            $table->string('nombre_biometrico');

            $table->datetime('fecha');
            $table->string('ingresoam')->default('00:00')->nullable();
            $table->string('salidaam')->default('00:00')->nullable();
            $table->string('ingresopm')->default('00:00')->nullable();
            $table->string('salidapm')->default('00:00')->nullable();
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

