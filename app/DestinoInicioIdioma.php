<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DestinoInicioIdioma extends Model
{
    //
    protected $table='destinos_inicio_idiomas';

    public function tours()
    {
        return $this->belongsTo(DestinoInicioIdioma::class, 'destino_inicio_padre_id');
    }
}
