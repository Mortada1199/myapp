<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;
    protected $table = 'managers';

    protected $fillable = [
        'id',
        'password',
        'name',
        'email',
        'photo',
    ];
    protected $hidden = [
     'created_at',
     'updated_at',
    ];
}
