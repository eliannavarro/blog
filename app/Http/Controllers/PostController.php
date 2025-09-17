<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'title' => 'required|string|max:255|unique:post,title',
    //         'category' => 'nullable|string|max:255',
    //         'content' => 'required|string',
    //     ]);

    //     Post::create([
    //         'title' => $request->title,
    //         'category' => $request->category,
    //         'content' => $request->content,
    //         // slug se genera automáticamente en el modelo
    //     ]);

    //     return redirect()->route('post.index')
    //         ->with('success', 'Post creado correctamente ✅');
    // }
public function store(StorePostRequest $request)
{
    // // Validar primero los datos
    // $request->validate([
    //     'title' => 'required|string|max:255|unique:post,title',
    //     'category' => 'nullable|string|max:255',
    //     'content' => 'required|string',
    // ]);

    // Asignación masiva con todo lo permitido en $fillable
    Post::create($request->all());

    return redirect()->route('post.index')
        ->with('success', 'Post creado correctamente ✅');
}

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:post,title,' . $post->id,
            'category' => 'nullable|string|max:255',
            'content' => 'required|string',
        ]);

        $post->title = $request->title;
        $post->category = $request->category;
        $post->content = $request->content;
        $post->save();

        return redirect()->route('post.show', $post)
            ->with('success', 'Post actualizado correctamente ✅');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index')
            ->with('success', 'Post eliminado correctamente ✅');
    }
}
