<html>
<head>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>

    <link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">
</head>
<body>
   <?php echo $__env->yieldContent('content'); ?>
</body>
</html>