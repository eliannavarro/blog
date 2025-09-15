 


<?php $__env->startSection('content'); ?>
    <h1>Formulario para crear un nuevo post</h1>

    <form action="<?php echo e(route('post.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label>Título</label>
        <input type="text" name="title">
        <br><br>

        <label>Categoría</label>
        <input type="text" name="category">
        <br><br>

        <label>Contenido</label>
        <textarea name="content"></textarea>
        <br><br>

        <button type="submit">Guardar</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('components.app_layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\wamp64\www\laravel\blog\resources\views/posts/create.blade.php ENDPATH**/ ?>