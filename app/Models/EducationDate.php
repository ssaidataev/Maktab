<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationDate extends Model
{
    use HasFactory;
    protected $fillable = [
        'start_year',
        'end_year',
        'is_active',
        'created_at',
        'updated_at',
    ];
    public $timestamps = true;
    protected $casts = [
        'is_active' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

}
