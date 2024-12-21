<?php

use Illuminate\Support\Facades\Route;

use App\Models\Post;
use App\Models\Video;
use App\Models\Comment;




// Route pour créer les données
Route::get('/test-create', function () {
    // Créer un post et une vidéo
    $post = Post::create(['title' => 'Post Title', 'content' => 'Post content.']);
    $video = Video::create(['title' => 'Video Title', 'url' => 'http://example.com/video']);

    // Ajouter des commentaires
    $post->comments()->create(['content' => 'This is a comment on the post.']);
    $video->comments()->create(['content' => 'This is a comment on the video.']);

    return 'Data created successfully!';
});

// Route pour récupérer les commentaires d'un post
Route::get('/test-fetch-post', function () {
    $post = Post::find(1);
    $comments = $post->comments;

    return $comments;
});

// Route pour récupérer les commentaires d'une vidéo
Route::get('/test-fetch-video', function () {
    $video = Video::find(1);
    $comments = $video->comments;

    return $comments;
});

// Route pour identifier le parent d'un commentaire
Route::get('/test-parent', function () {
    $comment = Comment::find(1);
    $parent = $comment->commentable;

    return [
        'comment_content' => $comment->content,
        'parent_type' => get_class($parent),
        'parent_data' => $parent
    ];
});
