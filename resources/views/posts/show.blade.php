 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel 11 posts</title>
</head>
<body>
        <a href="{{ route('post.index') }}">⬅️ Volver al listado</a></body>

<h2>Titulo: {{ $post->title }}</h2>

   <h3>contenido:</h3>  <p>{{ $post->content }}</p>

</html>

 


 {{-- @extends('components.app_layout')

@section('content')
    <h2>{{ $post->title }}</h2>

    <p>{{ $post->content }}</p>

    <a href="{{ route('post.index') }}">⬅️ Volver al listado</a>
@endsection
 --}}
