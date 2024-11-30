<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class positions extends Model
{
    use HasFactory;
    protected $table = 'positions';
    protected $fillable = [
        'name',
        'description',
        'is_active',
    ];
}
