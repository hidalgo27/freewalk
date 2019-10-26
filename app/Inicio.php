<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inicio extends Model
{
    //
    protected $table='inicio';
    public function imagenes()
    {
        return $this->hasMany(InicioImagen::class, 'inicio_id');
    }
    public function traducciones()
    {
        return $this->hasMany(InicioIdioma::class, 'inicio_padre_id');
    }
}
