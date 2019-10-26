<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InicioIdioma extends Model
{
    //
    protected $table='inicio_idiomas';
    public function inicio()
    {
        return $this->hasMany(Inicio::class, 'inicio_padre_id');
    }
}
