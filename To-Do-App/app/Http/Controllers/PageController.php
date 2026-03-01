<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a simple page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        // You can pass data to the view if needed.
        return view('simple');
    }

    public function intro(string $name, int $age = 0)
    {

    // pass the values to the view
    return view('intro', compact('name', 'age'));
    }
}
