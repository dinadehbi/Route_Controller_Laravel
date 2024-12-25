<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Génération automatique des routes d'authentification
Auth::routes();

// Route pour le tableau de bord (protégée par le middleware 'auth')
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

// Exemple de route pour le profil utilisateur
Route::get('/profile', function () {
    $user = Auth::user(); // Récupérer l'utilisateur connecté
    return view('profile', ['user' => $user]);
})->middleware('auth');





Route::get('/admin', function () {
    return 'Admin Dashboard';
})->middleware('role:admin');


Route::get('/editor', function () {
    return 'Editor Dashboard';
})->middleware('role:editor');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');