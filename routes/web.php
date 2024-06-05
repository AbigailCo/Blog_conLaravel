<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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



Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/home', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});
