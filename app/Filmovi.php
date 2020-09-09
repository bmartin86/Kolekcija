<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filmovi extends Model
{
    protected $primaryKey = 'film_id';
    
    public function setNaslovAttribute($value) {
        $this->attributes['naslov'] = ucfirst($value);
    }
    
    public function zanr()
    {
        return $this->belongsTo('App\Zanr','zanr_id','zanr_id' ); 
    }
}
