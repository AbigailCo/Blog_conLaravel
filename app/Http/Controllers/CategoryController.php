<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class CategoryController extends Controller
{
    public function getIndex()
    {
        // Obtener todos los posts
        $posts = Post::all();
        return view('categories.index', ['posts' => $posts]);
    }

    public function getShow($id)
    {
        // Obtener un post por ID o lanzar un error 404 si no se encuentra
        $post = Post::findOrFail($id);
        return view('categories.show', ['post' => $post]);
    }

    public function getEdit($id)
    {
        // Obtener un post por ID o lanzar un error 404 si no se encuentra
        $post = Post::findOrFail($id);
        return view('categories.edit', ['post' => $post]);
    }
    public function getCreate()
    {
        // Aquí puedes retornar una vista que contenga el formulario de creación de categoría
        return view('categories.create');
    }
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Crear una nueva instancia de la categoría
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        
        // Guardar la categoría en la base de datos
        $category->save();

        // Redireccionar a alguna página después de guardar la categoría (por ejemplo, la lista de categorías)
        return redirect()->route('categories.index')->with('success', '¡La categoría ha sido creada exitosamente!');
    }

    public function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'title' => 'required|string|max:255',
            'poster' => 'required|string|max:255',
            'content' => 'required|string',
            'habilitated' => 'boolean'
        ]);

        // Encontrar el post por ID o lanzar un error 404 si no se encuentra
        $post = Post::findOrFail($id);

        // Actualizar los campos del post
        $post->title = $request->input('title');
        $post->poster = $request->input('poster');
        $post->content = $request->input('content');
        $post->habilitated = $request->input('habilitated', false); // False si el checkbox no está marcado

        // Guardar los cambios en la base de datos
        $post->save();

        // Redirigir a la vista del post con un mensaje de éxito
        return redirect()->route('categories.show', $post->id)->with('success', 'Post updated successfully');
    }
}
