<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function edit()
{
    if (!auth()->user()->can('edit articles')) {
        abort(403, 'Accès interdit.');
    }

    return view('articles.edit');
}
}