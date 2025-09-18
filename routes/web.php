<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/test', function () {
    return __('validation.required', ['attribute' => 'nombre']);
});

Route::resource('post', PostController::class);