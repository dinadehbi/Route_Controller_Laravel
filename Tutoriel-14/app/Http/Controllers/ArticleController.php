<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ArticleController extends Controller
{
    use AuthorizesRequests; // Add this line to enable authorization

    public function update(Request $request, Article $article)
    {
        $this->authorize('update', $article);

        $article->update($request->all());
        return response()->json(['message' => 'Article updated successfully.']);
    }

    public function delete(Article $article)
    {
        $this->authorize('delete', $article);

        $article->delete();
        return response()->json(['message' => 'Article deleted successfully.']);
    }
}
