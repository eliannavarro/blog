 



<?php $__env->startSection('content'); ?>
<h1>Formulario para crear un nuevo post</h1>


<?php if($errors->any()): ?>
    <div style="color: red; font-weight: bold;">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<form action="<?php echo e(route('post.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <label>Título</label>
    <input type="text" name="title" value="<?php echo e(old('title')); ?>" required>
    <br><br>

    <label>Categoría</label>
    <input type="text" name="category" value="<?php echo e(old('category')); ?>">
    <br><br>

    <label>Contenido</label>
    <textarea name="content" required><?php echo e(old('content')); ?></textarea>
    <br><br>

    <button type="submit">Guardar</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('components.app_layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\wamp64\www\laravel\blog\resources\views/posts/create.blade.php ENDPATH**/ ?>