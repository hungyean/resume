<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    public function cart(){
        return $this->belongsTo('App\Cart');
    }
}
