<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citie extends Model
{
    use HasFactory;
    public function Cities(){
        return $this->belongsTo(Countrie::class,'cid','id');
    }
}