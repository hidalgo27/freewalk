<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    //
    protected $table='tours';
    public function destino()
    {
        return $this->belongsTo(Destino::class, 'destino_id');
    }
    public function imagenes()
    {
        return $this->hasMany(TourImagen::class, 'tours_id');
    }
    public function lugar_recojo()
    {
        return $this->belongsTo(LugarRecojo::class, 'lugar_recojo_id');
    }
    public function tours_relacionados()
    {
        return $this->hasMany(TourRelacionado::class, 'tours_padre_id');
    }
}
