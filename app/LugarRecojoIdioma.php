<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LugarRecojoIdioma extends Model
{
    //
    protected $table='lugar_recojo_idiomas';
    public function lugar_recojo()
    {
        return $this->belongsTo(LugarRecojo::class, 'lugar_recojo_padre_id');
    }
}
