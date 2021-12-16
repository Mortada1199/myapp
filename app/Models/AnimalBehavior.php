<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalBehavior extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }

    
    public function animalContent()
    {
        return $this->hasOne(AnimalContent::class);
    }
}
