@extends('layouts.layout')

@section('content')
<div class="max-w-sm mx-auto p-6 bg-white rounded shadow-md">
    <form method="post" action="{{ route('login.perform') }}">
        @csrf

        <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">Login</h1>


        <div class="mb-4">
            <label for="username" class="block text-gray-700 font-bold mb-2">Email or Username</label>
            <input type="text" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" name="username" value="{{ old('username') }}" placeholder="Username" required autofocus>
            @error('username')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="mb-4">
            <label for="password" class="block text-gray-700 font-bold mb-2">Password</label>
            <input type="password" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" name="password" value="{{ old('password') }}" placeholder="Password" required>
            @error('password')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition mb-4">Login</button>
        
        @include('auth.partials.copy')
    </form>
</div>
@endsection

