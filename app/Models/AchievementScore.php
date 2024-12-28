<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AchievementScore extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'achievement_place_id',
        'achievement_level_id',
        'competition_id',
        'score',
    ];

    public function achievementLevel()
    {
        return $this->belongsTo(AchievementLevel::class);
    }
    public function achievementPlace()
    {
        return $this->belongsTo(AchievementPlace::class);
    }
    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }
}
