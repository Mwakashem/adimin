<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    //
     protected $guarded = [];

     public function user(){
        return $this->belongsTo(User::class);
    }
    public function pimages(){
        return $this->hasMany(pimages::class);
    }
}
