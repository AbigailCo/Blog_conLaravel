@extends('layouts.layout')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white rounded shadow-md">
    <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">Create a Post</h1>
    <form method="POST" action="{{ route('post.store') }}">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-bold mb-2">Title</label>
            <input type="text" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" id="title" name="title" value="{{ old('title') }}" maxlength="255" required>
            @error('title')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="content" class="block text-gray-700 font-bold mb-2">Content</label>
            <textarea class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" id="content" name="content" rows="3" required>{{ old('content') }}</textarea>
            @error('content')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="category_id" class="block text-gray-700 font-bold mb-2">Category</label>
            <select id="category_id" name="category_id" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <option value="">Select a Category</option>
                @foreach (\App\Models\Category::all() as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="poster" class="block text-gray-700 font-bold mb-2">Author</label>
            <div class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-100 truncate overflow-hidden overflow-ellipsis">
                {{ auth()->user()->username }}
            </div>
            <input type="hidden" id="poster" name="poster" value="{{ auth()->user()->username }}">
        </div>
        <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition">Create</button>
    </form>
</div>

<div class="flex justify-end mt-4">
    <a href="{{ route('home.index') }}" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
        Volver
    </a>
</div
