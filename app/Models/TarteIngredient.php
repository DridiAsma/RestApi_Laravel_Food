<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TarteIngredient extends Model
{
    use HasFactory;
    public function tarte(){
        return $this->belongsTo(Tarte::class);
    }
}
