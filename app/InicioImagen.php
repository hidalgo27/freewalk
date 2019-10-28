<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InicioImagen extends Model
{
    //
    protected $table='inicio_imagen';
    public function inicio()
    {
        return $this->belongsTo(Inicio::class, 'inicio_id');
    }
}
