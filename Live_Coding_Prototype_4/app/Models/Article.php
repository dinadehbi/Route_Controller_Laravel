<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'category_id', 'user_id'];

    // Relation avec la catégorie
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relation avec l'utilisateur
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
