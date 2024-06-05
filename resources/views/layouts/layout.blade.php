<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Blog')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-600 p-4 text-white">
        <ul class="flex space-x-4">
            <li><a href="/" class="hover:underline">Home</a></li>
            <li><a href="/login" class="hover:underline">Login</a></li>
            <li><form method="POST" action="{{ route('logout') }}">
                 @csrf
                 <button type="submit" class="hover:underline">Logout</button>
                </form> <!--sin el metodo POST, el logout da error-->
            <li><a href="/post" class="hover:underline">Posts</a></li>
            <li><a href="/post/create" class="hover:underline">Add Post</a></li>
        </ul>
    </nav>
    <div class="container mx-auto p-4">
        @yield('content')
    </div>
</body>
</html>
