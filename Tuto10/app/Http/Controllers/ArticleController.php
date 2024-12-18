<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles = [
            ['id' => 1, 'title' =>'Stylo', 'description'=> 'Stylo bic color red'],
            ['id' => 2, 'title' =>'Pc', 'description'=> 'Dell Intel 5'],
            ['id' => 3, 'title' =>'Book', 'description'=> 'The secret']
        ];

        return view('articles.index', compact('articles'));
    }

    public function show($id){
        $articles = [
            'id' => $id,
            'title' => "Article $id",
            'description' => "content of article"
        ];

        return view('articles.show', compact('articles'));
    }


}
