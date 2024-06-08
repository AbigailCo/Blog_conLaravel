@extends('layouts.layout')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-semibold mb-4">Editar Perfil</h1>

        @if(session('status') == 'profile-updated')
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4" role="alert">
                Perfil actualizado correctamente.
            </div>
        @endif
        <div class="mt-8">
    @if (auth()->user()->profile_photo)
        <img src="{{ asset('profile_photos/' . auth()->user()->profile_photo) }}" alt="Foto de Perfil" class="rounded-full w-16 h-16 mx-auto border-2 border-gray-300">
    @else
        <img src="{{ asset('images/default_profile_photo.jpg') }}" alt="Foto de Perfil" class="rounded-full w-16 h-16 mx-auto border-2 border-gray-300">
    @endif
</div>
        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="max-w-md mx-auto">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" name="name" id="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ auth()->user()->name }}">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                <input type="email" name="email" id="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ auth()->user()->email }}">
            </div>

            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-700">Nombre de usuario</label>
                <input type="username" name="username" id="username" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ auth()->user()->username }}">
            </div>

            <div class="mb-4">
                <label for="profile_photo" class="block text-sm font-medium text-gray-700">Foto de Perfil</label>
                <input type="file" name="profile_photo" id="profile_photo" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <button type="submit" class="bg w-full  text-black py-2 px-4 rounded-md hover:bg-indigo-600 ">Actualizar Perfil</button>
        
  </form>
  <div class="flex justify-center">
    <a href="{{ route('home.index') }}" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
        Volver
    </a>
</div>
    </div>

        
        
@endsection
