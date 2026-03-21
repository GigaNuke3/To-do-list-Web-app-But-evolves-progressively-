@extends('layouts.app')

@section('content')

    <h1>Create an Account</h1>

    <form method="POST" action="{{ route('register.store') }}" class="auth-form">
        @csrf

        {{-- Name --}}
        <div class="form-group">
            <label for="name">Full Name</label>
            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name') }}"
                placeholder="Alexander"
                class="form-input {{ $errors->has('name') ? 'input-error' : '' }}"
            >
            @error('name')
                <span class="field-error">{{ $message }}</span>
            @enderror
        </div>

        {{-- Email --}}
        <div class="form-group">
            <label for="email">Email Address</label>
            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="yourname@example.com"
                class="form-input {{ $errors->has('email') ? 'input-error' : '' }}"
            >
            @error('email')
                <span class="field-error">{{ $message }}</span>
            @enderror
        </div>

        {{-- Password --}}
        <div class="form-group">
            <label for="password">Password</label>
            <input
                type="password"
                id="password"
                name="password"
                placeholder="Minimum 8 characters"
                class="form-input {{ $errors->has('password') ? 'input-error' : '' }}"
            >
            @error('password')
                <span class="field-error">{{ $message }}</span>
            @enderror
        </div>

        {{-- Confirm Password --}}
        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input
                type="password"
                id="password_confirmation"
                name="password_confirmation"
                placeholder="Repeat your password"
                class="form-input"
            >
        </div>

        {{-- Submit --}}
        <button type="submit" class="btn-add" style="width:100%; margin-top:8px;">
            Create Account
        </button>

        {{-- Login link --}}
        <p class="auth-link">
            Already have an account?
            <a href="#">Log in</a>
        </p>

    </form>

@endsection
