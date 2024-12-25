<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('contact');
});

Route::get('/laravel', function () {
    return 'Hello, Laravel';
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', [ContactController::class, 'create']);
Route::post('/contact', [ContactController::class, 'store']);

// Route to display the form results
Route::get('/contact/result', [ContactController::class, 'showResult'])->name('contact.result');