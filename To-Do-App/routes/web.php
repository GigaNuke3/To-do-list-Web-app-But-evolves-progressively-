<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

//Show all todos
Route::get('/', [TodoController::class, 'index'])->name('todos.index');

//Save a new todo (form submission)
Route::post('/todos', [TodoController::class, 'store'])->name('todos.store');

//Toggle a todo complete/incomplete
Route::patch('/todos/{todo}/toggle', [TodoController::class, 'toggle'])->name('todos.toggle');

//Delete a todo
Route::delete('/todos/{todo}', [TodoController::class, 'destroy'])->name('todos.destroy');