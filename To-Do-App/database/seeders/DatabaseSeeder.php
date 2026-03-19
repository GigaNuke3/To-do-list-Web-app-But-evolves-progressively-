<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder

{
    public function run(): void
    {
        // Create some sample todos so we have data to look at
        Todo::create(['title' => 'Learn Laravel routing', 'is_done' => true]);
        Todo::create(['title' => 'Understand migrations', 'is_done' => true]);
        Todo::create(['title' => 'Set up Eloquent models', 'is_done' => true]);
        Todo::create(['title' => 'Build the todo views', 'is_done' => false]);
        Todo::create(['title' => 'Add create and delete actions', 'is_done' => false]);
    }
}

