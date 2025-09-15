 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel 11 posts</title>
</head>
<body>
        <a href="<?php echo e(route('post.index')); ?>">⬅️ Volver al listado</a></body>

<h2>Titulo: <?php echo e($post->title); ?></h2>

   <h3>contenido:</h3>  <p><?php echo e($post->content); ?></p>

</html>

 


 
<?php /**PATH C:\wamp64\www\laravel\blog\resources\views/posts/show.blade.php ENDPATH**/ ?>