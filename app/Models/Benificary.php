<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benificary extends Model
{
    use HasFactory;
    protected $table = 'benificarys';

    protected $fillable = [
        'id',
        'password',
        'name',
        'phone',
        'state',
        'image',
    ];
    protected $hidden = [
     'created_at',
     'updated_at',
    ];

}
