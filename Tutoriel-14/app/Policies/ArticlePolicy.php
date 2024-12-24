<?php

namespace App\Policies;

use App\Models\Article;
use App\Models\User;

class ArticlePolicy
{
    public function update(User $user, Article $article)
    {
        return $user->id === $article->user_id || $user->hasRole('admin');
    }

    public function delete(User $user, Article $article)
    {
        return $user->hasRole('admin');
    }
}
