<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourRelacionado extends Model
{
    //
    protected $table='tours_relacionados';

    public function tours()
    {
        return $this->belongsTo(Tour::class, 'tours_padre_id');
    }
}
