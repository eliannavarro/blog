<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        // Por ahora no guardamos nada, solo redirigimos
        return redirect()->route('post.index')->with('success', 'Post creado correctamente ✅');
    }
    public function show($post)
    {
        return view('posts.show', compact('post'));
    }
}
