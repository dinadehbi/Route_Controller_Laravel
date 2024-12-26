<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;  // Import the Auth facade
use Spatie\Permission\Models\Role; // Import Role correctly
use Spatie\Permission\Models\Permission; // Import Permission if needed

class ArticleController extends Controller
{
    public function edit()
    {
        // Vérifiez si l'utilisateur est authentifié
        if (!Auth::check()) {
            abort(403, 'Accès interdit.');
        }

        // Vérifiez si l'utilisateur a la permission de "edit articles"
        if (!Auth::user()->can('edit articles')) {
            abort(403, 'Accès interdit.');
        }

        // Si l'utilisateur a la permission, continuez avec la logique
        return view('articles.edit');
    }
}
