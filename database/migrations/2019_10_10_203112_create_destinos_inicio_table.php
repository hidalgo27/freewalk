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
            $table->string('url')->comment('url del destino a mostrar en la pagina principal');
            $table->string('titulo')->comment('Titulo del destino a mostrar en la pagina principal');
            $table->longText('detalle')->nullable(true)->comment('Detalle del destino a mostrar en la pagina principal');
            $table->string('imagen')->nullable(true)->comment('Imagen del destino a mostrar en la pagina principal');
            $table->string('imagen_mobile')->nullable(true)->comment('Imagen para mobile del destino a mostrar en la pagina principal');
            $table->integer('estado')->comment('0:no mostrar, 1:mostrar');
            $table->string('idioma')->comment('Idioma del contenido');
            $table->string('seo_titulo')->nullable(true)->comment('titulo para seo');
            $table->longText('seo_descripcion')->nullable(true)->comment('descripcion para seo');
            $table->string('seo_canonical')->nullable(true)->comment('canonical para seo');
            $table->string('seo_imagen')->nullable(true)->comment('imagen para seo');
            $table->integer('destino_id')->nullable(true)->comment('id del destino al que pertenece');
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
