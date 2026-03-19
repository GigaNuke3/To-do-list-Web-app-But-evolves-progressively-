@extends('layouts.app')

@section('content')

    <h1>My Todos</h1>

    <ul style="list-style:none; padding:0;">
        @forelse ($todos as $todo)
            <li style="
                background: white;
                padding: 16px 20px;
                border-radius: 8px;
                margin-bottom: 10px;
                border: 1px solid #e0e0e0;
                display: flex;
                align-items: center;
                gap: 12px;
            ">
                {{-- Checkmark if done, empty circle if not --}}
                @if ($todo->is_done)
                    <span style="color: #28a745; font-size: 1.2rem;">✔</span>
                    <span style="text-decoration: line-through; color: #999;">
                        {{ $todo->title }}
                    </span>
                @else
                    <span style="color: #ccc; font-size: 1.2rem;">○</span>
                    <span>{{ $todo->title }}</span>
                @endif
            </li>
        @empty
            <li style="color: #888; padding: 20px 0;">
                No todos yet. You'll be able to add some soon!
            </li>
        @endforelse
    </ul>

@endsection