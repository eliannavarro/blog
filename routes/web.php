<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use PhpParser\Node\Stmt\Return_;

// Página principal
Route::get('/', [HomeController::class, 'index'])->name('home');

// Lista de posts
Route::get('/post', [PostController::class, 'index'])->name('post.index');

// Formulario para crear post
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');

// Mostrar un post específico
Route::get('/post/{post}', [PostController::class, 'show'])->name('post.show');

// Guardar un nuevo post (POST)
Route::post('/post', [PostController::class, 'store'])->name('post.store');

Route::get('/prueba' , function() {
  


$post = Post::find(1);

//return $post->published_at->format('d/m/Y'); 

dd($post->is_active);
}); 