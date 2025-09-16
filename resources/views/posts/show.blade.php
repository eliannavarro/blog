@extends('components.app_layout')

@section('content')
    <a href="{{ route('post.index') }}">⬅️ Volver al listado</a>

    <h2>Título: {{ $post->title }}</h2>

    <p><strong>Categoría:</strong> {{ $post->category ?? 'Sin categoría' }}</p>

    <h3>Contenido:</h3>
    <p>{{ $post->content }}</p>

    <a href="{{ route('post.edit', $post->id) }}">Editar post</a>


    <form action="/post/{{$post->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">
            Eliminar post
        </button>
    </form>

@endsection


 


 {{-- @extends('components.app_layout')

@section('content')
    <h2>{{ $post->title }}</h2>

    <p>{{ $post->content }}</p>

    <a href="{{ route('post.index') }}">⬅️ Volver al listado</a>
@endsection
 --}}
