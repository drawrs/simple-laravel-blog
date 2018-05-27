<?php $__env->startSection('title', 'About'); ?>
<?php $__env->startSection('content'); ?>
    <p>About page</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.blog', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>