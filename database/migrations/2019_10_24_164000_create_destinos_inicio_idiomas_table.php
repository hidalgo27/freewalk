<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinosInicioIdiomasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinos_inicio_idiomas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('destino_inicio_padre_id');
            $table->integer('destino_inicio_relacion_id');
            $table->string('idioma');
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
        Schema::dropIfExists('destinos_inicio_idiomas');
    }
}
