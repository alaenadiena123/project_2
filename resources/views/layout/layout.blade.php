<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<link rel="stylesheet" type="text/css" href="/css/alaena.css">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/alaena.css')}}">
</head>
<body>

<header>
@include('layout.header')
</header>

<ul class="nav flex-column"></ul>
	@section('sidebar')
	<li class="nav-item">
		<a class="nav-link active" href="#">html</a>
	</li>
	
	<li class="nav-item">
		<a class="nav-link active" href="#">css</a>
		
	<li class="nav-item">
		<a class="nav-link active" href="#">js</a>
	</li>
@show	
</ul>
@show
</ul>

<div class="container">
@yield('content')
</div>

</body>
</html>
