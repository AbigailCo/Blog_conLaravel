<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'getHome'])->name('home');

Route::get('/category', [CategoryController::class, 'getIndex'])->name('category.index');
Route::get('/category/{id}', [CategoryController::class, 'getShow'])->name('category.show');
Route::get('/category/{id}/edit', [CategoryController::class, 'getEdit'])->name('category.edit');
Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::get('/category/create', [CategoryController::class, 'getCreate'])->name('category.create');