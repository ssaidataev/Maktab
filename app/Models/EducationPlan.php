<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationPlan extends Model
{
    use HasFactory;

    protected $table = 'education_plans';

    protected $fillable = [
        'name',
        'description',
        'is_active',
    ];

    public $timestamps = true; // Для использования created_at и updated_at
}
