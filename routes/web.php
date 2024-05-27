<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'getHome']);

Route::get('/category', [App\Http\Controllers\CategoryController::class, 'getIndex']);

Route::get('/category/show/{id}', [App\Http\Controllers\CategoryController::class, 'getShow']);

Route::get('/category/create', [App\Http\Controllers\CategoryController::class, 'getCreate']);

Route::get('/category/edit/{id}', [App\Http\Controllers\CategoryController::class, 'getEdit']);