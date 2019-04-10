<!DOCTYPE html>
<html>
<head>
</head>
<body>
<title>CONTROL STRUKTUR PADA BLADE TEMPLATE</title>
<?php if(count($produk)==1): ?>
<p>Jumlah Produk adalah satu</p>
<?php elseif(count($produk)>1): ?>
<p><b>Perulangan dengan FOR</b></p>
<?php for($i = 0; $i < count($produk); $i++): ?>
<p><?php echo e('No :'.$i.' Nama Produk :'.$produk[$i]); ?></p>
<?php endfor; ?>
<hr>
<p><b>Perulangan dengan FOREACH</b></p>
<?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<p><?php echo e('No :'.$x.' Nama Produk :'.$v); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<hr>
<p><b>Perulangan dengan WHILE</b></p>
<?php
$no = 1;
?>
<?php while($no<=5): ?>
<p>ini adalah perulangan ke <?php echo e($no); ?></p>
<?php
$no++;
?>
<?php endwhile; ?>
<?php else: ?>
	<p>Tidak Ada Data Produk</p>
<?php endif; ?>
</body>
</html>