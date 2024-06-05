@extends('layouts.layout')

@section('content')
<div class="max-w-md mx-auto p-6 bg-white rounded shadow-md">
    <form method="post" action="{{ route('register.perform') }}">
        @csrf

        
        
        <h1 class="text-3xl font-bold mb-6 text-center">Register</h1>

        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
            <input type="text" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" name="name" value="{{ old('name') }}" placeholder="Juan Perez" required autofocus>
            @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-bold mb-2">Email address</label>
            <input type="email" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" name="email" value="{{ old('email') }}" placeholder="name@example.com" required autofocus>
            @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="username" class="block text-gray-700 font-bold mb-2">Username</label>
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

        <div class="mb-4">
            <label for="password_confirmation" class="block text-gray-700 font-bold mb-2">Confirm Password</label>
            <input type="password" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required>
            @error('password_confirmation')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition mb-4">Register</button>
        
        @include('auth.partials.copy')
    </form>
</div>
@endsection
