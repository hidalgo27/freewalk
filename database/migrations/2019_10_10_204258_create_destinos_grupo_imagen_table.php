<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinosGrupoImagenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinos_grupo_imagen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->longText('descripcion');
            $table->string('imagen');
            $table->integer('estado')->comment('0:banner, 1:lugares a visitar, 2:que_porque,3:atractivo,4: imagen seo, 5:banner mobile');
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
        Schema::dropIfExists('destinos_grupo_imagen');
    }
}
