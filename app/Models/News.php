<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = ['news_category_id','title', 'description', 'text', 'image', 'is_active', 'tags'];
}
