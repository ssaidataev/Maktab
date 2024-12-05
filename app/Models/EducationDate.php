<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationDate extends Model
{
    use HasFactory;

    protected $table = 'education_dates';

    protected $fillable = [
        'start_year',
        'end_year',
        'is_active',
    ];

    public $timestamps = true; // Для использования created_at и updated_at
}
