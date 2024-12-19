<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{



    public function attachTags(Request $request, $articleId)
    {
        $article = Article::findOrFail($articleId);

        $tags = $request->input('tags'); // IDs des tags
        $descriptions = $request->input('descriptions'); // Descriptions associées

        foreach ($tags as $index => $tagId) {
            $article->tags()->attach($tagId, ['description' => $descriptions[$index]]);
        }

        return redirect()->back()->with('success', 'Tags associés avec succès !');
    }

    public function show($id)
    {
        $article = Article::with('tags')->findOrFail($id);
        return view('articles.show', compact('article'));
    }
}
