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
            $table->longText('body_email')->nullable(true)->comment('Email para enviar el correo peronsalizado');
            $table->string('seo_titulo')->nullable(true)->comment('titulo para seo');
            $table->longText('seo_descripcion')->nullable(true)->comment('descripcion para seo');
            $table->string('seo_canonical')->nullable(true)->comment('canonical para seo');
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
        Schema::dropIfExists('tours');
    }
}
