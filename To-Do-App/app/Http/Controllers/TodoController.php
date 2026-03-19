<?php

namespace App\Http\Controllers;

use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        // Fetch all todos from the database, newest first
        $todos = Todo::latest()->get();

        return view('todos.index', compact('todos'));
    }
}