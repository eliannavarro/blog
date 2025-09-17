{{-- @extends('components.app_layout')

@section('content')
<h1>Editar Post</h1>

<form action="{{ route('post.update', $post) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Título</label>
    <input type="text" name="title" value="{{ $post->title }}" required>
    <br><br>

    <label>Categoría</label>
    <input type="text" name="category" value="{{ $post->category }}">
    <br><br>

    <label>Contenido</label>
    <textarea name="content" required>{{ $post->content }}</textarea>
    <br><br>

    <button type="submit">Actualizar</button>
</form>
@endsection --}}

@extends('components.app_layout')

@section('content')
<h1>Editar Post</h1>

{{-- Mostrar errores de validación --}}
@if ($errors->any())
    <div style="color: red; font-weight: bold;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('post.update', $post) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Título</label>
    <input type="text" name="title" value="{{ old('title', $post->title) }}" required>
    <br><br>

    <label>Categoría</label>
    <input type="text" name="category" value="{{ old('category', $post->category) }}">
    <br><br>

    <label>Contenido</label>
    <textarea name="content" required>{{ old('content', $post->content) }}</textarea>
    <br><br>

    <button type="submit">Actualizar</button>
</form>
@endsection

