<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Blog')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-MBMWB3OJ2ZudQZv++bB6O0zGQTf/cCZT61W4NivZMYS4DInFNS2O6yEmJe5tK0b/" crossorigin="anonymous">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    @yield('head')
</head>

<body class="bg-gray-100">
    <nav class="bg-blue-600 p-4 text-white shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <ul class="flex space-x-4">
                <li><a href="/" class="hover:bg-blue-700 py-2 px-4 rounded transition">Home</a></li>
                @guest
                @include('layouts.partials.navbarInseguro')
                @endguest
                @auth
                @include('layouts.partials.navbarSeguro')
                @endauth
            </ul>
        </div>
    </nav>
    <div class="container mx-auto p-4 mt-4 bg-white rounded shadow-lg">
        @yield('content')
    </div>
    @include('layouts.partials.footer')
</body>
</html>
