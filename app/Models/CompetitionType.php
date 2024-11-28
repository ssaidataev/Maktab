<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class CompetitionType extends Model
{
    use HasFactory;



    protected $table = 'competition_types';



    protected $fillable = [
        'name',
        'description',
        'is_active',
    ];
}
