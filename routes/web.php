<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;



Route::get('/', [Controller::class, 'index']);
Route::get('/about', [Controller::class, 'about']);
Route::get('/service', [Controller::class, 'service']);
Route::get('/blog', [Controller::class, 'blog']);
Route::get('/portfolio', [Controller::class, 'portfolio']);
Route::get('/team', [Controller::class, 'team']);
Route::get('/contact', [Controller::class, 'contact']);

