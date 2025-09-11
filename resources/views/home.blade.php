{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="p-6">
    <header></header>
    
    <x-alert2 type="success" title="Éxito" message="Este es un mensaje de éxito desde alert.blade.php" />

    <x-alert2 type="error" title="Error" message="Este es un mensaje de error desde alert2.blade.php" />

    <p>hola mundo</p>

    <footer></footer>
</body>
</html> --}}

@extends('layouts.app')

@section('title', 'laravel')
@push('css')
    <style>
        /* Estilos personalizados para la página */  
        body {
            background-color: #f3f3f3;
        }
        </style>   
@endpush
@section('content')

    {{-- <x-alert2 type="success" title="titulo de la alerta" message="mensaje de la alerta" />

    <x-alert2 type="error" title="Error" message="Este es un mensaje de error desde alert2" />

    <p>hola mundo</p> --}}
<x-alert2 type="success" class="mb-4">
    <x-slot name="title">Exito</x-slot>
    Contenido de la alerta.
</x-alert2>

<p>hola klk</p>

@endsection

