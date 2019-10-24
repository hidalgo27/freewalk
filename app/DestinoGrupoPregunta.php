<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DestinoGrupoPregunta extends Model
{
    //
    protected $table='destinos_grupo_preguntas';
    public function destino_grupo()
    {
        return $this->belongsTo(DestinoGrupo::class, 'destinos_grupo_id');
    }
}
