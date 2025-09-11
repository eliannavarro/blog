<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'type' => 'info',
    'title' => null,
    'message' => null,
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'type' => 'info',
    'title' => null,
    'message' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
    $classes = match ($type) {
        'success' => 'bg-green-100 text-green-800 border border-green-300 p-2 rounded',
        'error' => 'bg-red-100 text-red-800 border border-red-300 p-2 rounded',
        'warning' => 'bg-yellow-100 text-yellow-800 border border-yellow-300 p-2 rounded',
        default => 'bg-blue-100 text-blue-800 border border-blue-300 p-2 rounded',
    };
?>
<?php /**PATH C:\wamp64\www\laravel\blog\resources\views/components/alert.blade.php ENDPATH**/ ?>