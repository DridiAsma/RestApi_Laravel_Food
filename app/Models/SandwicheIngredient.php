<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SandwicheIngredient extends Model
{
    use HasFactory;

    public function sandwiche(){
        return $this->belongsTo(Sandwiche::class);
    }
}
