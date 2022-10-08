<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tacos extends Model
{
    use HasFactory;

    public function ingredientTacos()
    {
        return $this->hasMany(TacosIngreadients::class);
    }
}
