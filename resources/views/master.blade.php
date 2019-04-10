<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #8 : Sistem Template Blade Laravel</title>
</head>
<body>
 
	<header>
 
		<h2>Blog Manis Manja</h2>
		<nav>
		
			<a href="/blog">HOME</a><header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner" style="background :red;">
<div class="container" style="background:red; text-align:justify;font-family:cambria;">
			|
			<a href="/blog/tentang">TENTANG</a><header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner" style="background :red;">
<div class="container" style="background:red; text-align:justify;font-family:cambria;">
			|
			<a href="/blog/kontak">KONTAK</a><header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner" style="background :red;">
<div class="container" style="background:red; text-align:justify;font-family:cambria;">
		</nav>
	</header>
	<hr/>
	<br/>
	<br/>
 
	<!-- bagian judul halaman blog -->
	<h3> @yield('judul_halaman') </h3>
 
 
	<!-- bagian konten blog -->
	@yield('konten')
 
 
	<br/>
	<br/>
	<hr/>
	<footer>
		<p>&copy; <a href="https://www.malasngoding.com">www.malasngoding.com</a>. 2018 - 2019</p>
	</footer>
 
</body>
</html>