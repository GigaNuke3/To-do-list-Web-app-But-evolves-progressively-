@extends('layouts.app')

@section('content')

    <h1>My Todos</h1>

    {{-- ADD TODO FORM --}}
    <form method="POST" action="{{ route('todos.store') }}" class="todo-form">
        @csrf
        <input
            type="text"
            name="title"
            value="{{ old('title') }}"
            placeholder="What needs to be done?"
        >
        <button type="submit" class="btn-add">Add</button>
    </form>

    {{-- VALIDATION ERROR --}}
    @error('title')
        <div class="field-error">{{ $message }}</div>
    @enderror

    {{-- TODO LIST --}}
    <ul class="todo-list">
        @forelse ($todos as $todo)
            <li class="todo-item">

                {{-- TOGGLE COMPLETE --}}
                <form method="POST" action="{{ route('todos.toggle', $todo) }}">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn-toggle">
                        {{ $todo->is_done ? '✅' : '⬜' }}
                    </button>
                </form>

                {{-- TITLE --}}
                <span class="todo-title {{ $todo->is_done ? 'done' : '' }}">
                    {{ $todo->title }}
                </span>

                {{-- DELETE --}}
                <form method="POST" action="{{ route('todos.destroy', $todo) }}">
                    @csrf
                    @method('DELETE')
                    <button
                        type="submit"
                        class="btn-delete"
                        onclick="return confirm('Delete this todo?')"
                    >✕</button>
                </form>

            </li>
        @empty
            <li class="todo-empty">No todos yet. Add one above!</li>
        @endforelse
    </ul>

@endsection
