<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zanr extends Model
{
    protected $primaryKey = 'zanr_id';
    
    public function filmovi()
    {
        return $this->hasMany('App\Filmovi','zanr_id','zanr_id');  
    }
}
