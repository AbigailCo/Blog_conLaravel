@extends('layouts.layout')

@section('content')
<style>
    .break-words {
        word-wrap: break-word;
        overflow-wrap: break-word;
    }

    .break-all {
        word-break: break-all;
    }
</style>
<div class="max-w-2xl mx-auto p-6 bg-white rounded shadow-md">
    <h1 class="text-3xl font-bold text-gray-800 mb-4 break-words">{{ $post->title }}</h1>
    @if($post->image_path)
        <div class="mb-4">
            <img src="{{ asset($post->image_path) }}" alt="{{ $post->title }}" class="w-full h-auto rounded">
        </div>
    @endif
    <p class="text-gray-700 mb-4 break-words">{{ $post->content }}</p>
    <p class="text-gray-600 break-words">Category: <span class="font-bold">{{ $post->category->name ?? 'No category' }}</span></p>
    <p class="text-gray-600 break-words">Posted by <span class="font-bold">{{ $post->poster }}</span></p>
    <div class="flex justify-end mt-4">
        @if(isset($from) && $from == 'home')
            <a href="{{ route('home.index') }}" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Volver</a>
        @endif
    </div>

    @auth
        @if (auth()->user()->username == $post->poster)
            <div class="mt-4">
                <a href="{{ route('post.edit', $post->id) }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-black font-semibold py-2 px-4 rounded">Editar</a>
                <form action="{{ route('post.destroy', $post->id) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="inline-block bg-red-500 hover:bg-red-700 text-black font-semibold py-2 px-4 rounded" onclick="return confirm('¿Seguro que quieres eliminar este post?')">Eliminar</button>
                </form>
            </div>
        @endif

    @endauth
    <div class="flex justify-end mt-4">
        <a href="{{ route('post.myposts') }}" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
            Volver
        </a>
    </div>
</div>
@endsection
