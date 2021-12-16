<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MilkContent extends Model
{
    use HasFactory;
    protected $table = 'milk_contents';

    protected $fillable = [
        'id',
        'catogre',
        'description',
        'video'
    ];
    protected $hidden = [
     'created_at',
     'updated_at',
    ];
}
