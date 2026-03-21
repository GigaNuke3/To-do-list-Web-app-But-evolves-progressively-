<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // Show the registration form
    public function create()
    {
        return view('auth.register');
    }

    //Handle the form submission
    public function store(Request $request)
    {
        // Step 1 - Validate all fields
        $request->validate([
            'name'      =>'required|string|max:255',
            'email'     =>'required|email|unique:users,email',
            'password'  =>'required|string|min:8|confirmed',
        ]);
    

    // Step 2 - Create the User
    User::create([
        'name'      =>$request->input('name'),
        'email'     =>$request->input('email'),
        'password'  =>Hash::make($request->input('password')),
    ]);

    // Step 3 - Redirect with success message
    return redirect()->route('todos.index')
        ->with('success', 'Account created! You can now log in.');

    }
}
