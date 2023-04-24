<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exsubcategorie extends Model
{
    use HasFactory;
    public function Subcategories(){
        return $this->belongsTo(Subcategorie::class,'excid','id');
    }
}
