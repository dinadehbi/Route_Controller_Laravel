<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Models\Video;
use App\Models\Comment;

Route::get('/test-relations', function () {
    // Créer un article
    $article = Article::create(['title' => 'Article Test', 'content' => 'Contenu de l\'article test.']);

    // Créer une vidéo
    $video = Video::create(['title' => 'Vidéo Test', 'url' => 'https://example.com/test-video']);

    // Ajouter des commentaires
    $article->comments()->create(['content' => 'Commentaire sur l\'article.']);
    $video->comments()->create(['content' => 'Commentaire sur la vidéo.']);

    // Récupérer les commentaires associés à l'article
    $articleComments = $article->comments;

    // Récupérer l'entité associée à un commentaire
    $comment = Comment::first();
    $associatedEntity = $comment->commentable;

    // Retourner les résultats en JSON
    return response()->json([
        'article_comments' => $articleComments,
        'first_comment_associated_entity' => $associatedEntity,
    ]);
});
