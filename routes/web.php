<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;



Route::get('/', [Controller::class, 'index']);
Route::get('/about', [Controller::class, 'about']);
Route::get('/service', [Controller::class, 'service']);
Route::get('/blog', [Controller::class, 'blog']);
Route::get('/contact', [Controller::class, 'contact']);

Route::get('/blog/{id}/author/{name}', function ($id, $author) {
    return "blog " . $id . " author is " . $author;
});