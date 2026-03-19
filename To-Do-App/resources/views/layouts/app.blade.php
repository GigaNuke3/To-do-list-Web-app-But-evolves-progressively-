<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Todo App' }}</title>
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: sans-serif;
            background: #f0f2f5;
            color: #333;
            min-height: 100vh;
        }

        nav {
            background: #1a1a2e;
            color: white;
            padding: 16px 24px;
            font-size: 1.1rem;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .container {
            max-width: 700px;
            margin: 48px auto;
            padding: 0 20px;
        }

        h1 {
            font-size: 1.8rem;
            margin-bottom: 24px;
            color: #1a1a2e;
        }

        .alert-success {
            background: #d4edda;
            color: #155724;
            padding: 12px 16px;
            border-radius: 6px;
            margin-bottom: 20px;
            border: 1px solid #c3e6cb;
        }

        .alert-error {
            background: #f8d7da;
            color: #721c24;
            padding: 12px 16px;
            border-radius: 6px;
            margin-bottom: 20px;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>
    <nav>Todo App</nav>

    <div class="container">
        @if (session('success'))
            <div class="alert-success">{{ session('success') }}</div>
        @endif

        @if (session('error'))
            <div class="alert-error">{{ session('error') }}</div>
        @endif

        @yield('content')

    </div>
    
</body>
</html>