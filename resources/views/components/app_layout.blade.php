<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laravel 11</title>
</head>
<body>
    <header>
        <!-- Aquí podrías agregar un nav si quieres -->
    </header>

    <main>
        @yield('content')
        {{-- Aquí se cargará el contenido de cada vista --}}
    </main>

    <footer>
    </footer>
</body>
</html>
