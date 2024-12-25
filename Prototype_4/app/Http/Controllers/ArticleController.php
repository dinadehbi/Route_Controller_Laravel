<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        // Retrieve only necessary columns
        $articles = Article::with('category')->get(['id', 'title', 'content', 'category_id']); 

        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('articles.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        Article::create($request->all());

        return redirect()->route('articles.index')->with('success', 'Article created successfully.');
    }

    public function destroy($id)
    {
        Article::findOrFail($id)->delete();
        return redirect()->route('articles.index')->with('success', 'Article deleted successfully.');
    }
}
