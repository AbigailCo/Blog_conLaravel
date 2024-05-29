<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;

// Ruta para la página principal
Route::get('/', [HomeController::class, 'getHome'])->name('home');

// Ruta para el listado de categorías
Route::get('/category', [CategoryController::class, 'getIndex'])->name('category.index');

// Ruta para la vista detalle del post con {id}
Route::get('/category/show/{id}', [CategoryController::class, 'getShow'])->name('category.show');

// Ruta para añadir un post
Route::get('/category/create', [CategoryController::class, 'getCreate'])->name('category.create');

// Ruta para modificar un post con {id}
Route::get('/category/edit/{id}', [CategoryController::class, 'getEdit'])->name('category.edit');

// Ruta para actualizar un post con {id}
Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');

// Breeze routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php'; // Esto incluye todas las rutas de autenticación proporcionadas por Breeze


