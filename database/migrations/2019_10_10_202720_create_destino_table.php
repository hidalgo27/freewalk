<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('url')->comment('url del destino');
            $table->string('nombre')->comment('nombre del destino');
            $table->string('idioma')->comment('Idioma del contenido');
            $table->integer('estado')->comment('0:no mostrar, 1:mostrar');
            $table->integer('seo_titulo')->nullable(true)->comment('titulo para seo');
            $table->integer('seo_descripcion')->nullable(true)->comment('descripcion para seo');
            $table->integer('seo_canonical')->nullable(true)->comment('canonical para seo');
            $table->integer('seo_imagen')->nullable(true)->comment('imagen para seo');
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
        Schema::dropIfExists('destinos');
    }
}
