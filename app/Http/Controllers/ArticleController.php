<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // Afficher la liste des articles
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    // Afficher le formulaire de création d'un article
    public function create()
    {
        return view('articles.create');
    }

    // Enregistrer un nouvel article
    public function store(Request $request)
    {
        // Validation des données du formulaire
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        // Création d'un nouvel article
        Article::create($validated);

        // Rediriger avec un message de succès
        return redirect()->route('articles.index')->with('success', 'Article créé avec succès.');
    }

    // Afficher un article spécifique
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    // Afficher le formulaire de modification d'un article
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    // Mettre à jour un article existant
    public function update(Request $request, Article $article)
    {
        // Validation des données du formulaire
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        // Mise à jour des données de l'article
        $article->update($validated);

        // Rediriger avec un message de succès
        return redirect()->route('articles.index')->with('success', 'Article mis à jour avec succès.');
    }

    // Supprimer un article
    public function destroy(Article $article)
    {
        // Supprimer l'article
        $article->delete();

        // Rediriger avec un message de succès
        return redirect()->route('articles.index')->with('success', 'Article supprimé avec succès.');
    }
}
