<!DOCTYPE html>
<html>
<head>
    <title>Crear Post</title>
</head>
<body>
    <h1>Formulario para crear post</h1>

    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Título">
        <textarea name="content" placeholder="Contenido"></textarea>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
