<?php

namespace App;

use App\Reviews;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function reviews(){
        return $this->hasMany(Reviews::class);
    }
}
