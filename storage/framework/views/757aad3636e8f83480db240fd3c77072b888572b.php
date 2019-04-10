<!-- Menghubungkan dengan view template master -->

 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
<?php $__env->startSection('judul_halaman', 'Halaman Tentang'); ?>
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
<?php $__env->startSection('konten'); ?>
 
	<p>Ini Adalah Halaman Tentang data pribadiku</p>
	<p>
		alaena diena laelis lahir di bandar lampung pada tanggal 05 agustus 1999 dan sekang berumur 19 tahun 
	</p>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>