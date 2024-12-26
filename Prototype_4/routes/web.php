<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;

Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});




// Route::get('/dashboard', function () {
//     return view('adminlte::page');
// })->middleware('auth');



Route::resource('articles', ArticleController::class);

Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');

Route::middleware('auth')->group(function () {
    Route::resource('articles', ArticleController::class);
});

Route::group(['middleware' => ['role:admin']], function () {
    Route::resource('articles', ArticleController::class);
});

Route::get('/home', [ArticleController::class, 'home'])->name('home');

// Route::get('/articles', [ArticleController::class, 'index'])->name('article.index')->middleware('role:admin');





