<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inicio', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('url')->comment('Url amigable del home');
            $table->string('titulo')->comment('Titulo del home');
            $table->longText('descripcion')->comment('Descripcion del home');
            $table->integer('estado');
            $table->string('idioma')->comment('Idioma del contenido');
            $table->integer('seo_titulo')->nullable(true)->comment('titulo para seo');
            $table->integer('seo_descripcion')->nullable(true)->comment('descripcion para seo');
            $table->integer('seo_canonical')->nullable(true)->comment('canonical para seo');
            $table->integer('destino_id')->nullable(true)->comment('id del destino al que pertenece');
            $table->integer('lugar_recojo_id')->nullable(true)->comment('id del lugar de recojo al que pertenece');
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
        Schema::dropIfExists('inicio');
    }
}
