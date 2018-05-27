<?php $__env->startSection('title', $post->title); ?>
<?php $__env->startSection('content'); ?>
    <h2><?php echo e($post->title); ?></h2>
    <small>Published at: <?php echo e($post->created_at->diffForHumans()); ?></small><br>
    <small>Category: <?php echo e($post->category->name); ?></small>
    <p><?php echo $post->content; ?></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.blog', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>