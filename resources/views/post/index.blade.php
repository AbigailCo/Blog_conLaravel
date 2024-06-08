@extends('layouts.layout')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+cg0G5GOJVxL9ljsPv5X6Fk5ZO+IvAz/uxy2U+sqUtoa05e" crossorigin="anonymous">

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white rounded shadow-md">
    <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">Posts</h1>

    <form action="{{ route('posts.search') }}" method="GET" class="mb-6">
        <div class="flex">
            <input type="text" name="query" class="w-full p-2 border border-gray-300 rounded-l focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Buscar posts...">
            <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-r hover:bg-blue-700 transition">Buscar</button>
        </div>
    </form>
    <ul>
        @if(isset($posts) && $posts->count())
        @foreach($posts as $post)
        <li class="mb-4 border-b border-gray-200 py-4">
            <div class="mb-4">
                <a href="{{ route('post.show', $post->id) }}">
                    <p class="text-lg font-bold truncate overflow-hidden overflow-ellipsis">{{ Str::limit($post->title, 50) }}</p>
                </a>
                <p class="text-gray-600 truncate overflow-hidden overflow-ellipsis">by {{ Str::limit($post->poster, 25) }}</p>
            </div>
            <!-- Verificar si el usuario ha dado "me gusta" a este post -->
            @if(auth()->check() && !auth()->user()->likedPosts->contains($post->id))
            <form action="{{ route('post.like', $post->id) }}" method="post">
                @csrf
                <button type="submit">
                    <i class="far fa-heart"></i> Me gusta
                </button>
            </form>
            @else
            <form action="{{ route('post.unlike', $post->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">
                    <i class="fas fa-heart"></i> Ya no me gusta
                </button>
            </form>
            @endif

            <!-- Mostrar el número total de "me gusta" -->
            {{ $post->likes }} Me gusta
        </li>
        @endforeach
        @else
        <p class="text-gray-600">No se encontraron posts.</p>
        @endif
    </ul>
    <div class="flex justify-end mt-4">
    <a href="{{ route('home.index') }}" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
        Volver
    </a>
</div>
@endsection