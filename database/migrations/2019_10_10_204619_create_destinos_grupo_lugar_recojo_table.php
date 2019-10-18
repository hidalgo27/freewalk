<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinosGrupoLugarRecojoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lugar_recojo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->string('imagen');
            $table->longText('iframe');
            $table->string('lat');
            $table->string('lon');
            $table->string('referencia');
            $table->string('referencia_imagen');
            $table->integer('estado');
            $table->string('idioma')->comment('Idioma del contenido');
            $table->integer('destino_id')->comment('id del destino al que pertenece');
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
        Schema::dropIfExists('destinos_grupo_lugar_recojo');
    }
}
