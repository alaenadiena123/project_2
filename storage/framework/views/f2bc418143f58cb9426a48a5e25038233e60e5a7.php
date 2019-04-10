<!DOCTYPE html>
<html>
<head>
<title><?php echo $__env->yieldContent('title'); ?></title>
<link rel="stylesheet" type="text/css" href="/css/alaena.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/app.css')); ?>">
</head>
<body>

<header>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</header>

<ul class="nav flex-column"></ul>
	<?php $__env->startSection('sidebar'); ?>
	<li class="nav-item">
		<a class="nav-link active" href="#">html</a>
	</li>
	
	<li class="nav-item">
		<a class="nav-link active" href="#">css</a>
		
	<li class="nav-item">
		<a class="nav-link active" href="#">js</a>
	</li>
<?php echo $__env->yieldSection(); ?>	
</ul>
<?php echo $__env->yieldSection(); ?>
</ul>

<div class="container">
<?php echo $__env->yieldContent('content'); ?>
</div>

</body>
</html>
