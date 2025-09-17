

 

<?php $__env->startSection('content'); ?>
<a href="<?php echo e(route('post.index')); ?>">⬅️ Volver al listado</a>


<?php if(session('success')): ?>
    <div style="color: green; font-weight: bold;">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<h2>Título: <?php echo e($post->title); ?></h2>
<p><strong>Categoría:</strong> <?php echo e($post->category ?? 'Sin categoría'); ?></p>
<h3>Contenido:</h3>
<p><?php echo e($post->content); ?></p>

<a href="<?php echo e(route('post.edit', $post)); ?>">✏️ Editar post</a>

<form action="<?php echo e(route('post.destroy', $post)); ?>" method="POST" style="margin-top: 15px;">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <button type="submit" onclick="return confirm('¿Seguro que quieres eliminar este post?')">
        🗑️ Eliminar post
    </button>
</form>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('components.app_layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\wamp64\www\laravel\blog\resources\views/posts/show.blade.php ENDPATH**/ ?>