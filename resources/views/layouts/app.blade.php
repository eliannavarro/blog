<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Mi App')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    @stack('css')
</head>
<body class="p-6">
    <header>
        {{-- Aquí podría ir un menú o logo --}}
    </header>

    <main class="my-6">
        @yield('content')
    </main>

    <footer>
        {{-- Aquí podría ir un pie de página --}}
    </footer>
</body>
</html>
