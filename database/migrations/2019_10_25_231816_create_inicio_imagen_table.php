<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInicioImagenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inicio_imagen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo')->nullable(true);
            $table->longText('descripcion')->nullable(true);
            $table->string('imagen');
            $table->integer('estado')->comment('0:banner,1: imagen seo',);
            $table->integer('inicio_id')->comment('id del destino al que pertenece');
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
        Schema::dropIfExists('inicio_imagen');
    }
}
