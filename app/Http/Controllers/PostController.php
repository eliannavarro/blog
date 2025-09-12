<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::all();
        return view('posts.index', compact('post'));
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        return redirect()->route('post.index')->with('success', 'Post creado correctamente ✅');
    }
    public function show($post)
    {
        return view('posts.show', compact('post'));
    }
}
