<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $primaryKey = 'id';



    public function products(){
        return $this->belongsToMany('\App\Product');
    }

    public function user(){
        return $this->belongsTo('\App\User');
    }
}
