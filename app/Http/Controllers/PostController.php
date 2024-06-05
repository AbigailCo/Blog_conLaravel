<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

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

    public function getEdit($id)
    {
        $post = Post::findOrFail($id);
        return view('post.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
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
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->poster = $request->input('poster');
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

}

