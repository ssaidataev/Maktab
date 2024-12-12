<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentStatus extends Model
{
    use HasFactory;

    protected $table = 'mark_types';

    protected $fillable = [
        'name',
        'description',
        'is_active',
        'created_at',
        'updated_at',
    ];

    public $timestamps = true; // Для использования created_at и updated_at
}
