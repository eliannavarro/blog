<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Mostrar listado de posts
    public function index()
    {
$posts = Post::orderBy('id', 'desc')->paginate(200);        
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
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'content' => 'required|string',
        ]);

        $post = new Post();
        $post->title = $request->input('title'); 
        $post->content = $request->input('content');
        $post->category = $request->input('category'); // 🔹 corregido
        $post->save();

        return redirect()->route('post.index')->with('success', 'Post creado correctamente ✅');
    }

    // Mostrar un post específico
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    // Mostrar formulario de edición
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    // Actualizar un post existente
    public function update(Request $request, Post $post)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'category' => 'nullable|string|max:255',
        'content' => 'required|string',
    ]);

    // Guardamos cambios
    $post->title = $request->title;
    $post->category = $request->category;
    $post->content = $request->content;
    $post->save();

    // Redirigimos a la vista del post actualizado
    return redirect()->route('post.show', $post->id)
        ->with('success', 'Post actualizado correctamente ✅');
}
public function destroy(Post $post)
{
    $post = Post::find($post->id);
    $post->delete();
    return redirect()->route('post.index')
        ->with('success', 'Post eliminado correctamente ✅');

}
}