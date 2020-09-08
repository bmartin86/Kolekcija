<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filmovi extends Model
{
    protected $primaryKey = 'film_id';
    
    public function setNaslovAttribute($value) {
        $this->attributes['naslov'] = ucfirst($value);
    }
}
