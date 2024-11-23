<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    //
    use HasFactory;
    protected $table = 'homeworks';
    protected $fillable = [
        'name',
        'description',
        'is_active',
        'subject_id',
        'class_type',
        'number',
        'created_by',

    ];
}
