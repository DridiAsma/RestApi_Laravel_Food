<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TacosIngreadients extends Model
{
    use HasFactory;
    public function tacos(){
        return $this->belongsTo(Tacos::class);
    }
}
