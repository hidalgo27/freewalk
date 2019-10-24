<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DestinoGrupo extends Model
{
    //
    protected $table='destinos_grupo';
    public function destino()
    {
        return $this->belongsTo(Destino::class, 'destino_id');
    }
    public function imagenes()
    {
        return $this->hasMany(DestinoGrupoImagen::class, 'destinos_grupo_id');
    }
    public function preguntas()
    {
        return $this->hasMany(DestinoGrupoPregunta::class, 'destinos_grupo_id');
    }
}
