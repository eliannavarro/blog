 {{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Laravel 11</title>
</head>
<body>

    <h1>Formulario para crear un nuevo post</h1>
<form action="{{ route('post.store') }}" method="POST">
    @csrf
    <label>Título</label>
    <input type="text" name="title">
<br><br>
    <label>Categoría</label>
    <input type="text" name="category">
<br><br>
    <label>Contenido</label>
    <textarea name="content"></textarea>
<br><br>
    <button type="submit">Guardar</button>
</form>

</body>
</html>  --}}
@extends('components.app_layout')

@section('content')
    <h1>Formulario para crear un nuevo post</h1>

    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <label>Título</label>
        <input type="text" name="title">
        <br><br>

        <label>Categoría</label>
        <input type="text" name="category">
        <br><br>

        <label>Contenido</label>
        <textarea name="content"></textarea>
        <br><br>

        <button type="submit">Guardar</button>
    </form>
@endsection
