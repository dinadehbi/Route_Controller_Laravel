<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ArticleController;



Auth::routes();


Route::get('/profile', function () {
    $user = Auth::user();
    return view('profile', ['user' => $user]);
})->middleware('auth');


Route::get('/dashboard', function () {
    return view('adminlte::page');
})->middleware('auth');



Route::resource('articles', ArticleController::class);

Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');

Route::middleware('auth')->group(function () {
    Route::resource('articles', ArticleController::class);
});



