<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title', 'Mi App'); ?></title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <?php echo $__env->yieldPushContent('css'); ?>
</head>
<body class="p-6">
    <header>
        
    </header>

    <main class="my-6">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer>
        
    </footer>
</body>
</html>
<?php /**PATH C:\wamp64\www\laravel\blog\resources\views/layouts/app.blade.php ENDPATH**/ ?>