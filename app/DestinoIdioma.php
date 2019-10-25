<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DestinoIdioma extends Model
{
    //
    protected $table='destino_idiomas';
    public function destino()
    {
        return $this->belongsTo(Destino::class, 'destino_padre_id');
    }
}
