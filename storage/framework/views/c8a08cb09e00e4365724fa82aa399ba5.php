



<?php $__env->startSection('title', 'laravel'); ?>
<?php $__env->startPush('css'); ?>
    <style>
        /* Estilos personalizados para la página */  
        body {
            background-color: #f3f3f3;
        }
        </style>   
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>

    
<?php if (isset($component)) { $__componentOriginal2a81c3e0bd0367ff1c2023bb70c7d8d5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2a81c3e0bd0367ff1c2023bb70c7d8d5 = $attributes; } ?>
<?php $component = App\View\Components\Alert2::resolve(['type' => 'success'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('alert2'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Alert2::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-4']); ?>
     <?php $__env->slot('title', null, []); ?> Exito <?php $__env->endSlot(); ?>
    Contenido de la alerta.
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2a81c3e0bd0367ff1c2023bb70c7d8d5)): ?>
<?php $attributes = $__attributesOriginal2a81c3e0bd0367ff1c2023bb70c7d8d5; ?>
<?php unset($__attributesOriginal2a81c3e0bd0367ff1c2023bb70c7d8d5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2a81c3e0bd0367ff1c2023bb70c7d8d5)): ?>
<?php $component = $__componentOriginal2a81c3e0bd0367ff1c2023bb70c7d8d5; ?>
<?php unset($__componentOriginal2a81c3e0bd0367ff1c2023bb70c7d8d5); ?>
<?php endif; ?>

<p>hola klk</p>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\wamp64\www\laravel\blog\resources\views/home.blade.php ENDPATH**/ ?>