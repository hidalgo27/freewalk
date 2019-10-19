<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('url')->comment('Url amigable del tour');
            $table->string('titulo')->comment('Titulo del tour');
            $table->longText('descripcion')->comment('Descripcion del tour');
            $table->longText('itinerario')->comment('Itinerario del tour');
            $table->integer('estado');
            $table->string('idioma')->comment('Idioma del contenido');
            $table->integer('destino_id')->comment('id del destino al que pertenece');
            $table->integer('lugar_recojo_id')->comment('id del lugar de recojo al que pertenece');
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
        Schema::dropIfExists('tours');
    }
}
