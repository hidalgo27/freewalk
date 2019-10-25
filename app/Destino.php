<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    //
    protected $table='destinos';
    public function destinos_inicio()
    {
        return $this->hasMany(DestinoInicio::class, 'destino_id');
    }
    public function destinos_grupo()
    {
        return $this->hasMany(DestinoGrupo::class, 'destino_id');
    }
    public function tours()
    {
        return $this->hasMany(Tour::class, 'destino_id');
    }
    public function lugares_recojo()
    {
        return $this->hasMany(LugarRecojo::class, 'destino_id');
    }
    public function traducciones()
    {
        return $this->hasMany(DestinoIdioma::class, 'destino_padre_id');
    }
}
