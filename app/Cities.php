<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model {
    public function countries(){
        return $this->belongsTo(Countrie:class)
    }
    // public function lines(){
    //     return $this->hasMany(Countries:class)
    // }
}