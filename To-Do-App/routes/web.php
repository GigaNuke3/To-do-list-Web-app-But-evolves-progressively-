<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

// simple page route
Route::get('/simple', [PageController::class, 'index']);

Route::get('/intro', function () {
    return view('intro', ['name' => 'Eco', 'age' => 30]);
});