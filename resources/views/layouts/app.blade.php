<!DOCTYPE html>
<html>
<head>
	<title>laravelproject</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

</head>
<body>
	@include('inc.navbar')

	<div class="container">
		@if(Request::is('/'))
		@include('inc.showcase')
     @endif
		 <div class="row">

	<div class="col-md-8 col-lg-8">

@include('inc.messages')
@yield('content')
</div>
<div class="col-md-4 col-lg-4">
@include('inc.sidebar')
</div>
</div>
</div>
<footer id="footer" class="text-center">
	<p>Copyright 2017 &copy Acme
	</p>
</footer>

</body>
</html>
