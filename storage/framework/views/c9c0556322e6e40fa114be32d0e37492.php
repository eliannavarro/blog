<!DOCTYPE html>
<html>
<head>
    <title>Crear Post</title>
</head>
<body>
    <h1>Formulario para crear post</h1>

    <form action="<?php echo e(route('post.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="text" name="title" placeholder="Título">
        <textarea name="content" placeholder="Contenido"></textarea>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
<?php /**PATH C:\wamp64\www\laravel\blog\resources\views/posts/create.blade.php ENDPATH**/ ?>