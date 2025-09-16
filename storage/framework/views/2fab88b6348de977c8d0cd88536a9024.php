

<?php $__env->startSection('content'); ?>
    <h1>Editar Post</h1>

    <form action="<?php echo e(route('post.update', $post->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?> 

        <label>Título</label>
        <input type="text" name="title" value="<?php echo e($post->title); ?>">
        <br><br>

        <label>Categoría</label>
        <input type="text" name="category" value="<?php echo e($post->category); ?>">
        <br><br>

        <label>Contenido</label>
        <textarea name="content"><?php echo e($post->content); ?></textarea>
        <br><br>

        <button type="submit">Actualizar</button>
    </form>
<?php $__env->stopSection(); ?>
 
<?php echo $__env->make('components.app_layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\wamp64\www\laravel\blog\resources\views/posts/edit.blade.php ENDPATH**/ ?>