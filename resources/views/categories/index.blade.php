@extends('layouts.layout')

@section('content')
    <div class="container mx-auto p-6 bg-white rounded shadow-md">
        <h1 class="text-4xl font-bold text-gray-800 mb-6 text-center">Categories</h1>
        
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif
        <!--
        <div class="flex justify-end mb-4">
            <a href="{{ route('categories.create') }}" class="bg-green-500 hover:bg-green-700 text-blue font-bold py-2 px-4 rounded">Add Category +</a>
        </div> -->
        
        <div class="overflow-x-auto">
            <div class="w-full mx-auto">
                <table class="min-w-full bg-white mx-auto">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                        <th class="w-1/3 px-4 py-2 text-left text-xl">Category Name</th>
                        <th class="w-1/3 px-4 py-2 text-left text-xl">Category Image</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach ($categories as $category)
                            <tr>
                            <td class="border px-4 py-2 text-xl">{{ $category->name }}</td>
                                <td class="border px-4 py-2 text-xl">
                                    @if($category->image_path)
                                    <img src="{{ asset($category->image_path) }}" class="w-16 h-16 object-cover rounded">
                                    @else
                                        No Image
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="flex justify-end mt-6">
            <a href="{{ route('categories.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Create Category</a>
        </div>
    </div>
@endsection
