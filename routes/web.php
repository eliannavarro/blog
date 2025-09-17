<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use PHPUnit\Framework\MockObject\Rule\Parameters;

// // Página principal
 Route::get('/', [HomeController::class, 'index'])->name('home');

// // Lista de posts
// Route::get('/post', [PostController::class, 'index'])->name('post.index');

// // Formulario para crear post
// Route::get('/post/create', [PostController::class, 'create'])->name('post.create');

// // Guardar un nuevo post (POST)
// Route::post('/post', [PostController::class, 'store'])->name('post.store');

// // Mostrar un post específico
// Route::get('/post/{post}', [PostController::class, 'show'])->name('post.show');

// // Formulario para editar un post
// Route::get('/post/{post}/edit', [PostController::class, 'edit'])->name('post.edit');

// // Actualizar un post existente
// Route::put('/post/{post}', [PostController::class, 'update'])->name('post.update');

Route::resource('post', PostController::class);

// Route::delete('/post/{post}', [PostController::class, 'destroy'])->name('post.destroy');
// // Ruta de pruebas (desactivada)
// // Route::get('/prueba', function () {
// //     $post = Post::find(1);
// //     return $post->is_active ? 'Activo ✅' : 'Inactivo ❌';
// // });
