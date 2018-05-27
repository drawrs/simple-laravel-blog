<!DOCTYPE html>
<html>
<head>
    <title><?php echo $__env->yieldContent('title'); ?> | Larablog</title>
    <link rel="stylesheet" href="<?php echo e(url('css/style.css')); ?>">
</head>
<body>
    <div class="wrapper">
        <h1>Larablog</h1>
        <hr>
        <a href="/">Home</a> &bullet; 
        <a href="/about">About Us</a> &bullet; 
        <a href="/contact">Contact</a>
        <hr>
        <section id="content">
            <?php echo $__env->yieldContent('content'); ?>
        </section>
        <section id="sidebar">
            <h3>Categories</h3>
            <ul>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="<?php echo e(route('category', [$category->id])); ?>"><?php echo e($category->name); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </section>
        <div class="clearfix"></div>
    </div>
</body>
</html>