<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentClasses extends Model
{
    use HasFactory;
    protected $table = 'classes';

    protected $fillable = [
        'education_date_id',
        'supervisor_id',
        'room_id',
        'number',
        'literal',
        'is_active',
        'class_type',
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
