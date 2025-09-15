{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel 11 posts</title>
</head>
<body>
    <header></header>
    <h1>Aqui se mostraran todos los post</h1>
    
    <footer></footer>
</body>
</html> --}}

{{-- _________________________________________________________________________ --}}

{{-- @extends('components.app_layout')

@section('content')
    <h2>Aqui se mostraran todos los post</h2>
@endsection  --}}



@extends('components.app_layout')

@section('content')
    <h2>Aquí se mostrarán todos los posts</h2>

<a href="/post/create/">
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

