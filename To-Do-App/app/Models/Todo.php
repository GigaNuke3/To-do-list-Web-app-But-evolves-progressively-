<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    // These columns are safe to mass-assign
    // (meaning we can do Todo::create([...]) with these fields)
    protected $fillable = [
        'title',
        'is_done',
    ];

    // Tell Laravel to treat is_done as a real boolean
    // not just thje string "0" or "1" from the database
    protected $casts = [
        'is_done' => 'boolean',
    ];
}
