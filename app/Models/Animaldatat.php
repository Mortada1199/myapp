<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animaldatat extends Model
{
    use HasFactory;

    protected $table = 'animalsdata';

    protected $fillable = [
        'name',
        'behaviour_id',
        'behavior',
        'description',
    ];
  
 
}
