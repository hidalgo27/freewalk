<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinoIdiomasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destino_idiomas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('destino_padre_id');
            $table->integer('destino_relacion_id');
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
        Schema::dropIfExists('destino_idiomas');
    }
}
