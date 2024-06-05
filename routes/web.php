<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
// routes/web.php





// Ruta para la página principal
Route::get('/', [HomeController::class, 'getHome'])->name('home');

// Ruta para el listado de categorías
Route::get('/post', [PostController::class, 'getIndex'])->name('post.index');

Route::get('/post/search', [PostController::class, 'search'])->name('posts.search');

// Ruta para la vista detalle del post con {id}
Route::get('/post/show/{id}', [PostController::class, 'getShow'])->name('post.show');

// Ruta para añadir un post
Route::get('/post/create', [PostController::class, 'getCreate'])->name('post.create');
Route::post('/post', [PostController::class, 'store'])->name('post.store');


// Ruta para modificar un post con {id}
Route::get('/post/edit/{id}', [PostController::class, 'getEdit'])->name('post.edit');

// Ruta para actualizar un post con {id}
Route::put('/post/{id}', [PostController::class, 'update'])->name('post.update');

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


