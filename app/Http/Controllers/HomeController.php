<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getHome()
    {
        $posts = Post::all(); // Recupera todos los posts
        return view('home.index', compact('posts'));
    }
}
