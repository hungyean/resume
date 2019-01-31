<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function user(){
        return $this->belongsToMany(User::class,'carts');
    }

    public function cart(){
        return $this->hasOne('App\Cart');
    }

}
