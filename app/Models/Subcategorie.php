<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategorie extends Model
{
    use HasFactory;
    public function Categories(){
        return $this->belongsTo(Categorie::class,'cid','id');
    }
}
