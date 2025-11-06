<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #007bff;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Header -->
     <header>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('contact') }}">Contact</a>
        </nav>
     </header>

    <!-- Body -->
    <div>
        @yield('content')
    </div>

    <!-- Footer -->
     <div class="footer">
        <p>&copy; {{ date('Y') }} Develop By : NM Saikat</p>
     </div>
</body>
</html>