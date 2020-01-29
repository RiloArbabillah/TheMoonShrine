<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>@yield('judul')</title>

	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body background="">
	<div>
		@yield('content')
	</div>

	<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

	<script>
		
	</script>
</body>
</html>