<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinosGrupoIdiomasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinos_grupo_idiomas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('destino_grupo_padre_id');
            $table->integer('destino_grupo_relacion_id');
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
        Schema::dropIfExists('destinos_grupo_idiomas');
    }
}
