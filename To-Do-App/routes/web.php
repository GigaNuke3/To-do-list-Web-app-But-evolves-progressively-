<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

// simple page route
Route::get('/simple', [PageController::class, 'index']);

Route::get('/intro', function () {
    return view('intro', ['name' => 'Eco', 'age' => 30]);
});

Route::get('/', function() {
    return view('home');
});

Route::post('/register', [RegisterController::class, 'register']);