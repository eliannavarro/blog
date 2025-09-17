{{-- @extends('components.app_layout')

@section('content')
<a href="{{ route('post.index') }}">⬅️ Volver al listado</a>

<h2>Título: {{ $post->title }}</h2>
<p><strong>Categoría:</strong> {{ $post->category ?? 'Sin categoría' }}</p>
<h3>Contenido:</h3>
<p>{{ $post->content }}</p>

<a href="{{ route('post.edit', $post) }}">Editar post</a>

<form action="{{ route('post.destroy', $post) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Eliminar post</button>
</form>
@endsection --}}

 @extends('components.app_layout')

@section('content')
<a href="{{ route('post.index') }}">⬅️ Volver al listado</a>

{{-- Mostrar mensajes de éxito --}}
@if (session('success'))
    <div style="color: green; font-weight: bold;">
        {{ session('success') }}
    </div>
@endif

<h2>Título: {{ $post->title }}</h2>
<p><strong>Categoría:</strong> {{ $post->category ?? 'Sin categoría' }}</p>
<h3>Contenido:</h3>
<p>{{ $post->content }}</p>

<a href="{{ route('post.edit', $post) }}">✏️ Editar post</a>

<form action="{{ route('post.destroy', $post) }}" method="POST" style="margin-top: 15px;">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('¿Seguro que quieres eliminar este post?')">
        🗑️ Eliminar post
    </button>
</form>
@endsection

