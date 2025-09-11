  {{-- <div {{ $attributes->merge(['class' => 'p-4 text-sm rounded-lg ' . $classes]) }} role="alert">
    @if($title)
        <span class="font-bold mb-1">{{ $title ?? 'Info Alert'}}</span>
        {{ $slot }}
    @endif
    <div>{{ $message }}</div>

</div>
 
 --}}
<div {{ $attributes->merge(['class' => 'p-4 text-sm rounded-lg ' . $classes]) }} role="alert">
    <span class="font-medium">{{ $title ?? 'Info Alert' }}:</span> {!! trim(preg_replace('/\s+/', ' ', $slot)) ?: $message !!}
</div>

 
