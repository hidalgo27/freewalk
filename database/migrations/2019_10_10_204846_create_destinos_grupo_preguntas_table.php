<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinosGrupoPreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinos_grupo_preguntas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pregunta');
            $table->longText('respuesta');
            $table->integer('estado');
            // $table->string('idioma')->comment('Idioma del contenido');
            $table->integer('destinos_grupo_id')->comment('id del destino al que pertenece');
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
        Schema::dropIfExists('destinos_grupo_preguntas');
    }
}
