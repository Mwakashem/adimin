<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pimages extends Model
{
    //
    protected $guarded = [];

     public function properties(){
        return $this->belongsTo(Properties::class);
    }
}
