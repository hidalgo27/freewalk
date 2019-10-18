<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourImagen extends Model
{
    //
    protected $table='tours_imagen';
    public function tour()
    {
        return $this->belongsTo(Tour::class, 'tours_id');
    }
}
