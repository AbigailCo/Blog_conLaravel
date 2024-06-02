@extends('layouts.layout')

@section('content')
    <div class="container mx-auto">
        <div class="max-w-md mx-auto mt-10 bg-white rounded-lg shadow-md overflow-hidden">
            <div class="px-4 py-2 bg-blue-600">
                <h1 class="text-xl font-bold text-white">Crear Categoría</h1>
            </div>

            <div class="p-4">
                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="block text-gray-700">Nombre:</label>
                        <input type="text" name="name" id="name" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
                    </div>

                    <div class="mb-4">
                        <label for="description" class="block text-gray-700">Descripción:</label>
                        <textarea name="description" id="description" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" rows="4"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md focus:outline-none focus:shadow-outline">Crear Categoría</button>
                </form>
            </div>
        </div>
    </div>
@endsection
