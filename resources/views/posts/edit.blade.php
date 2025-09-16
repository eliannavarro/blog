@extends('components.app_layout')

@section('content')
    <h1>Editar Post</h1>

    <form action="{{ route('post.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT') {{-- Laravel necesita esto para reconocer la actualización --}}

        <label>Título</label>
        <input type="text" name="title" value="{{ $post->title }}">
        <br><br>

        <label>Categoría</label>
        <input type="text" name="category" value="{{ $post->category }}">
        <br><br>

        <label>Contenido</label>
        <textarea name="content">{{ $post->content }}</textarea>
        <br><br>

        <button type="submit">Actualizar</button>
    </form>
@endsection
 