<?php

namespace App\Http\Controllers;

use App\Models\Article;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::all();  // Fetch all articles from the database
        return view('home', compact('articles'));
    }
}
