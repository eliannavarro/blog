{{-- @props([
    'type' => 'info',
    'title' => null,
    'message' => null,
])

@php
    $classes = match ($type) {
        'success' => 'bg-green-100 text-green-800 border border-green-300 p-2 rounded',
        'error' => 'bg-red-100 text-red-800 border border-red-300 p-2 rounded',
        'warning' => 'bg-yellow-100 text-yellow-800 border border-yellow-300 p-2 rounded',
        default => 'bg-blue-100 text-blue-800 border border-blue-300 p-2 rounded',
    };
@endphp --}}

@props([
    'type' => 'info',
    'title' => 'info',
    'message' => null,
])

@php
    $classes = match ($type) {
        'success' => 'bg-green-100 text-green-800 border border-green-300 p-4 rounded',
        'error'   => 'bg-red-100 text-red-800 border border-red-300 p-4 rounded',
        'warning' => 'bg-yellow-100 text-yellow-800 border border-yellow-300 p-4 rounded',
        default   => 'bg-blue-100 text-blue-800 border border-blue-300 p-4 rounded',
    };
@endphp
