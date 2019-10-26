<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinosGrupoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinos_grupo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('url')->comment('Url del destino grupo a mostrar en la pagina');
            $table->string('titulo')->comment('Titulo del destino grupo a mostrar en la pagina');
            $table->longText('descripcion')->comment('Descripcion del destino grupo a mostrar en la pagina');
            $table->longText('detalle')->comment('Detalle del destino grupo a mostrar en la pagina');
            $table->longText('que_porque')->comment('Que porque del destino grupo a mostrar en la pagina');
            $table->integer('estado')->comment('0:no mostrar, 1:mostrar');
            $table->string('idioma')->comment('Idioma del contenido');
            $table->integer('seo_titulo')->nullable(true)->comment('titulo para seo');
            $table->integer('seo_descripcion')->nullable(true)->comment('descripcion para seo');
            $table->integer('seo_canonical')->nullable(true)->comment('canonical para seo');
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
        Schema::dropIfExists('destinos_grupo');
    }
}
