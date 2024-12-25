<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;


//Auth::routes();


// Route pour afficher le formulaire de connexion
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');

// Route pour traiter le formulaire de connexion (POST)
Route::post('login', [LoginController::class, 'login']);

Route::post('logout', [LoginController::class, 'logout'])->name('logout');






Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'role:admin'])  // 'role:admin' vérifie si l'utilisateur a le rôle 'admin'
    ->name('dashboard');




Route::get('/admin/dashboard', [AdminController::class, 'index']);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
