<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sandwiche extends Model
{
    use HasFactory;
    public function ingredientSandwich()
    {
        return $this->hasMany(SandwicheIngredient::class);
    }
}
