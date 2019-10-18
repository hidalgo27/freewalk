<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DestinoInicio extends Model
{
    //
    protected $table='destinos_inicio';
    public function destino()
    {
        return $this->belongsTo(Destino::class, 'destino_id');
    }
}
