<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title_en','description_en', 'content_en', 'showcase_en',  'title_lv', 'description_lv', 'content_lv', 'showcase_lv', 'image_path'];
}