<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LugarRecojo extends Model
{
    //
    protected $table='lugar_recojo';
    public function tours()
    {
        return $this->hasMany(Tour::class, 'lugar_recojo_id');
    }
    public function destino()
    {
        return $this->belongsTo(LugarRecojo::class, 'destino_id');
    }
}
