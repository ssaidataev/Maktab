<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class EducationLevel extends Model
{
    use HasFactory;
    protected $table = 'education_levels';

    protected $fillable = [
        'name',
        'description',
        'order',
        'is_active',
        'created_at',
        'updated_at',
    ];

    public $timestamps = true; // Для использования created_at и updated_at
}
