<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Blog')</title>
   
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
                    <li><a href="{{ route('login.show') }}" class="hover:bg-blue-700 py-2 px-4 rounded transition">Login</a></li>
                    <li><a href="{{ route('register.show') }}" class="hover:bg-blue-700 py-2 px-4 rounded transition">Register</a></li>
                @endguest
                @auth
                    <li><a href="/post" class="hover:bg-blue-700 py-2 px-4 rounded transition">Posts</a></li>
                    <li><a href="/post/create" class="hover:bg-blue-700 py-2 px-4 rounded transition">Add Post</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="hover:bg-blue-700 py-2 px-4 rounded transition">Logout</button>
                        </form>
                    </li>
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
