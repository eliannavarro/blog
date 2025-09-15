<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Mostrar listado de posts
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        return view('posts.index', compact('posts'));
    }

    // Mostrar formulario de creación
    public function create()
    {
        return view('posts.create');
    }

    // Guardar un nuevo post
    public function store(Request $request)
{
    $post = new Post();
    $post->title = $request->input('title'); 
    $post->content = $request->input('content');
    $post->category = $request->has('category');
    $post->save();

    return redirect()->route('post.index');
}
    

    // Mostrar un post específico
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

public function edit($post)
    {
        return view('posts.edit', compact('post'));
    }

}

