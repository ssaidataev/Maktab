<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable= ['user_id','class_id','student_status_id'];
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function student_classes()
    {
        return $this->belongsTo(StudentClasses::class);

    }

    public function student_status()
    {
        return $this->belongsTo(StudentStatus::class);
    }


}
