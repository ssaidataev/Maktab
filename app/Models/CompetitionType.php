<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetitionType extends Model
{
    use HasFactory;

    /**
     * Атрибуты, которые можно массово присваивать.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'is_active',
    ];

    /**
     * Атрибуты, которые должны быть преобразованы в родные типы.
     *
     * @var array
     */
    protected $casts = [
        'is_active' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
