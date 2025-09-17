{{-- @extends('components.app_layout')

@section('content')
    <h2>Aquí se mostrarán todos los posts</h2>

    <a href="{{ route('post.create') }}">
        Crear nuevo post
    </a>

    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('post.show', $post) }}">
                    {{ $post->title }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection

 --}}
@extends('components.app_layout')

@section('content')
    <h2>Aquí se mostrarán todos los posts</h2>

    <a href="{{ route('post.create') }}">
        Crear nuevo post
    </a>

    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('post.show', $post) }}">
                    {{ $post->title }}
                </a>
            </li>
        @endforeach
    </ul>
<div>
    {{ $posts->links() }}
</div>
@endsection