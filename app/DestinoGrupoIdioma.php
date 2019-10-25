<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DestinoGrupoIdioma extends Model
{
    //
    protected $table='destinos_grupo_idiomas';
    public function destino_grupo()
    {
        return $this->belongsTo(DestinoGrupo::class, 'destino_grupo_padre_id');
    }
}
