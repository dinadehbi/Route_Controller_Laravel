<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return 'Admin Dashboard';
})->middleware('role:admin');

Route::get('/editor', function () {
    return 'Editor Dashboard';
})->middleware('role:editor');
