<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarte extends Model
{
    use HasFactory;

    public function ingredientTarte()
    {
        return $this->hasMany(TarteIngredient::class);
    }
}
