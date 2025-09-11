  
<div <?php echo e($attributes->merge(['class' => 'p-4 text-sm rounded-lg ' . $classes])); ?> role="alert">
    <span class="font-medium"><?php echo e($title ?? 'Info Alert'); ?>:</span> <?php echo trim(preg_replace('/\s+/', ' ', $slot)) ?: $message; ?>

</div>

 
<?php /**PATH C:\wamp64\www\laravel\blog\resources\views/components/alert2.blade.php ENDPATH**/ ?>