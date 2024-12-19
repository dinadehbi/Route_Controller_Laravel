<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Article extends Model
{
    use HasFactory;

    public function articles(){
        return $this->belongsToMany(Article::class, 'article_tag');
    }
}
