<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function getIndex()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    public function getShow($id)
    {
        $post = Post::findOrFail($id);
        return view('post.show', compact('post'));
    }
    //Metodos para Edit
    public function getEdit($id)
    {
        $post = Post::findOrFail($id);
        // Verificar si el usuario autenticado es el autor del post
        if ($post->poster !== Auth::user()->username) {
            return redirect('/')->with('error', 'You are not authorized to edit this post.');
        }
        return view('post.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        
        if ($post->poster !== Auth::user()->username) {
            return redirect('/')->with('error', 'You are not authorized to edit this post.');
        }

        $post->update($request->all());
        return redirect()->route('post.show', $id);
    }
    //Metodos Para Create
    public function getCreate()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // Valida el maximo del titulo
            'title' => 'required|string|max:255', 
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ]);
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->poster = $request->input('poster');
        $post->category_id = $request->input('category_id');
        $post->save();

        return redirect()->route('post.index')->with('success', 'Post created successfully');
    }

    //Metodos para el Buscador
    public function search(Request $request)
    {
        $query = $request->input('query');

        $posts = Post::where('title', 'LIKE', "%$query%")
                    ->orWhere('content', 'LIKE', "%$query%")
                    ->get();

        return view('post.index', compact('posts'));
    }

    //Metodos Like
    public function likePost($postId)
{
    $post = Post::findOrFail($postId);
    $post->likes++;
    $post->save();

    $post->likes()->create([
        'user_id' => auth()->id(),
    ]);

    return redirect()->back();
}

public function unlikePost($postId)
{
    $post = Post::findOrFail($postId);
    $post->likes--;
    $post->save();

    $post->likes()->where('user_id', auth()->id())->delete();

    return redirect()->back();
}

// Eliminar post
public function destroy(Post $post)
{
    // Verifica si el usuario autenticado tiene permiso para eliminar el post
    if (auth()->user()->username == $post->poster) {
        // Eliminar el post
        $post->delete();
        // Redirecciona a una página de confirmación o a donde desees
        return redirect()->route('post.index')->with('success', 'Post deleted successfully.');
    } else {
        // Si el usuario no tiene permiso para eliminar el post, redirigirlo a una página de error o a donde desees
        return redirect()->route('post.index')->with('error', 'You do not have permission to delete this post.');
    }
}
//Myposts
public function showMyPosts()
{
    // Obtener el username del usuario autenticado
    $poster = Auth::user()->username;

    // Obtener los posts del autor
    $posts = Post::where('poster', $poster)->get();

    return view('post.mypost', compact('posts'));
    
}

public function searchMyPosts(Request $request)
{
    // Obtener el username del usuario autenticado
    $poster = Auth::user()->username;

    // Obtener el término de búsqueda del formulario
    $query = $request->input('query');

    // Filtrar los posts del autor y realizar la búsqueda
    $posts = Post::where('poster', $poster)
                 ->where(function($queryBuilder) use ($query) {
                     $queryBuilder->where('title', 'LIKE', "%$query%")
                                  ->orWhere('content', 'LIKE', "%$query%");
                 })
                 ->get();

    return view('post.mypost', compact('posts'));
}
////////////////////////////////////////////////////
public function show($id, Request $request)
{
    $post = Post::findOrFail($id);
    $from = $request->query('from');
    return view('post.show', compact('post', 'from'));
}



}

