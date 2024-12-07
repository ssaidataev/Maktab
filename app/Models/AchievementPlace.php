<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class AchievementPlace extends Model
{
    use HasFactory;

    protected $table = 'achievement_places';

    protected $fillable = [
        'name',
        'description',
        'is_active',
        'icon',
    ];

    public $timestamps = false;
}
