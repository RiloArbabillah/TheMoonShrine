<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<link rel="shortcut icon" type="image/x-icon" href="index.png"/>
	<title>Toram Online</title>

	<!-- Custom fonts for this template-->
	<link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
</head>
<body background="bg.png">
{{-- 	<div class="mr-5 mt-5" align="right">
		<span class="fa fa-login">Login</span>
	</div> --}}
	<div class="img-responsive" align="center" style="margin-top:9%;">
		<a href="">
			<img src="index.png" class="mt-5" width="200" height="200">
		</a>
	</div>

	<div class="mt-2 nav justify-content-center" style="font-size: 18px">
		<a href="" class="nav-link">Shop</a>
		<a href="" class="nav-link ml-4">Monster</a>
		<a href="" class="nav-link ml-4">Character Build</a>
		<a href="" class="">
			<div class="dropdown">
			 	<a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    Other
			 	</a>

			 	<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
			    	<a class="dropdown-item dropitem" href="#">Opsi 1</a>
			    	<a class="dropdown-item dropitem" href="#">Opsi 2</a>
			    	<a class="dropdown-item dropitem" href="#">Opsi 3</a>
			 	</div>
			</div>
		</a>
	</div>

	<div class="mt-3 form-inline justify-content-center">
		<form class="justify-content-center form-inline my-2 my-lg-0 mr-5">
			@csrf
			<input class="form-control mr-1" type="text" name="mob_lvl_search" size="10" placeholder="Mob By level">
			<button class="btn btn-primary" type="submit">Search</button>
		</form>
		<form class="justify-content-center form-inline my-2 my-lg-0">
			@csrf
			<input class="form-control mr-1" type="text" name="mob_name_search" size="25" placeholder="Mob By name">
			<button class="btn btn-primary" type="submit">Search</button>
		</form>
	</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
<style type="text/css">
	.link{
		font-size: 22px;
		font-family: "times new roman";
	}
	form{
		display: inline-block;
	}
	.dropitem:hover{
		background-color: #3490dc;
	}
</style>
</html>