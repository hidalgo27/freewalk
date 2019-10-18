<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DestinoGrupoImagen extends Model
{
    //
    protected $table='destinos_grupo_imagen';
    public function destino_grupo()
    {
        return $this->belongsTo(DestinoGrupo::class, 'destinos_grupo_id');
    }
}
