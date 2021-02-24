<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey = 'id';


    public function products(){
        return $this->belongsToMany('\App\Product');
    }
}
