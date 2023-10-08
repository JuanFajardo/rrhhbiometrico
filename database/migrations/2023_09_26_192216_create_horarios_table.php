<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->integer('id_usuario');
            $table->string('horario');
            $table->text('descripcion')->default('')->nullable();
            $table->time('ingresoam')->default('00:00')->nullable();
            $table->time('salidaam')->default('00:00')->nullable();
            $table->time('ingresopm')->default('00:00')->nullable();
            $table->time('salidapm')->default('00:00')->nullable();
            $table->integer('retrazo')->default('10')->nullable();

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
        Schema::dropIfExists('horarios');
    }
}
