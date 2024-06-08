
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Blog')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-MBMWB3OJ2ZudQZv++bB6O0zGQTf/cCZT61W4NivZMYS4DInFNS2O6yEmJe5tK0b/" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    @yield('head')
</head>
<body class="bg-gray-100">
    <nav class="bg-gray-200 shadow shadow-gray-300 w-full px-8 md:px-auto">
        <div class="md:h-16 h-28 mx-auto md:px-4 container flex items-center justify-between flex-wrap md:flex-nowrap">
           
            <div class="text-gray-500 order-3 w-full md:w-auto md:order-2">
                <ul class="flex font-semibold justify-between">
                    
                    @guest
                    @include('layouts.partials.navbarInseguro')
                    @endguest
                    @auth
                    @include('layouts.partials.navbarSeguro')
                    @endauth
                </ul>
            </div>
            
        </div>
    </nav>
    <div class="container mx-auto p-4 mt-4 bg-white rounded shadow-lg">
        @yield('content')
    </div>
    @include('layouts.partials.footer')
</body>
</html>


