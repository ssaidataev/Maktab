<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

    use HasFactory;

    protected $fillable = [
        'user_id',
        'position_id',
        'education_level_id',
        'created_at',
        'updated_at',
    ];

}
