<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TodoController extends Controller
{
    // Show all todos
    public function index()
    {
        // Fetch all todos from the database, newest first
        $todos = Todo::latest()->get();
        return view('todos.index', compact('todos'));
    }

    // Save a new todo
    public function store(Request $request)
    {
        $request->validate([
        'title' => 'required|string|max:255',
    ]);

    Todo::create([
        'title' => $request->input('title'),
    ]);

    return redirect()->route('todos.index')
        ->with('success', 'Todo added!');
}

    //Toggle complete / incomplete
    public function toggle(Todo $todo)
    {
        $todo->update([
            'is_done' => !$todo->is_done,
        ]);
   
    
    return redirect()->route('todos.index')
        ->with('success', 'Todo updated!');

}

    //Delete a todo
    public function destroy(Todo $todo)
    {
        $todo->delete();

        return redirect()->route('todos.index')
            ->with('success', 'Todo deleted!');
    }
}