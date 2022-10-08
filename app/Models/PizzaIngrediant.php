<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PizzaIngrediant extends Model
{
    use HasFactory;

    public function pizza(){
        return $this->belongsTo(Pizza::class);
    }
}
