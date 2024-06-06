<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Blog')</title>
   
    <!-- Estilos CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-blue-600 p-4 text-white shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <ul class="flex space-x-4">
                <li><a href="/" class="hover:bg-blue-700 py-2 px-4 rounded transition">Home</a></li>
                @guest
                    <li><a href="{{ route('login.show') }}" class="hover:bg-blue-700 py-2 px-4 rounded transition">Login</a></li>
                    <li><a href="{{ route('register.show') }}" class="hover:bg-blue-700 py-2 px-4 rounded transition">Register</a></li>
                @endguest
                @auth
                    @include('layouts.partials.navbar')
                @endauth
            </ul>
        </div>
    </nav>
    <!-- Contenido -->
    <div class="container mx-auto p-4 mt-4 bg-white rounded shadow-lg">
        @yield('content')
    </div>
</body>
</html>
