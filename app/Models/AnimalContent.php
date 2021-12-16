<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalContent extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function animalBehavior()
    {
        return $this->belongsTo(AnimalBehavior::class);
    }
} 
