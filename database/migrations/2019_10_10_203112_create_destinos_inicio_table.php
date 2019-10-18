<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinosInicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinos_inicio', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo')->comment('Titulo del destino a mostrar en la pagina principal');
            $table->longText('detalle')->nullable(true)->comment('Detalle del destino a mostrar en la pagina principal');
            $table->string('imagen')->nullable(true)->comment('Imagen del destino a mostrar en la pagina principal');
            $table->integer('estado')->comment('0:no mostrar, 1:mostrar');
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
        Schema::dropIfExists('destinos_inicio');
    }
}
