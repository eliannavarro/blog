


<?php $__env->startSection('content'); ?>
    <h2>Aquí se mostrarán todos los posts</h2>

    <a href="<?php echo e(route('post.create')); ?>">
        Crear nuevo post
    </a>

    <ul>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a href="<?php echo e(route('post.show', $post)); ?>">
                    <?php echo e($post->title); ?>

                </a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('components.app_layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\wamp64\www\laravel\blog\resources\views/posts/index.blade.php ENDPATH**/ ?>