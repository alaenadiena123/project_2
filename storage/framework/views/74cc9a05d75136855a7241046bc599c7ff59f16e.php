<link rel="stylesheet" type="text/css" href="/css/alaena.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/app.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/app.css')); ?>">
<link rel="stylesheet" type="text/css" href="/css/alaena.css">

<div class="a">

<?php $__env->startSection('title',$title); ?>
<?php $__env->startSection('sidebar'); ?>
##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##

<li class="nav-item">
	<a class="nav-item">
</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<img src="hp.jpg" width="100%" height="70%">

<p><?php echo e($konten); ?></p>
<?php $__env->stopSection(); ?>
</div>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>