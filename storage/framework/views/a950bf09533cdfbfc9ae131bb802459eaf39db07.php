<?php $__env->startSection('title', 'Home'); ?>
<?php $__env->startSection('content'); ?>
    <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <h2><?php echo e($post->title); ?></h2>
        <small>Published at: <?php echo e($post->created_at->diffForHumans()); ?></small><br>
        <small>Category: <?php echo e($post->category->name); ?></small>
        <p><?php echo str_limit($post->content, 160); ?> <a href="<?php echo e(route('post.read', [$post->slug])); ?>">[Read more]</a></p>
        <hr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div style="text-align: center;">
            <h3><i>No post's here..</i></h3>
            <br>
            <a href="/">< Back to Home</a>
        </div>

    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.blog', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>