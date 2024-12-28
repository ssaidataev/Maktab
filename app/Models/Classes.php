<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classes extends Model
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
    ];
    public function education_date()
    {
        return $this->belongsTo(EducationDate::class);
    }
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function room()
    {
        return $this->belongsTo(Room::class);
    }



    public $timestamps = true; // Для использования created_at и updated_at
}
