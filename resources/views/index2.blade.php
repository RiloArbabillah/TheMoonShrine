@extends('_layouts.default_layouts')
@section('content')

<style>
.layer{
	position: fixed;
	bottom: 0;
	z-index: -1;
 	padding: 0;
	margin: 0;
	background-image: radial-gradient(rgba(0, 0, 0, 0.8) 1px, transparent 1px);
	background-size: 3px 3px;
}	


.vid{
	position: fixed;
	z-index: -1;
	top: -75px;
	left: 0;
	min-width: 100%;
	min-height: 100%;
	background-position: center center;
	background-size: cover;
	background-repeat: no-repeat;
}
.isi{
	z-index: 10
}
</style>

<div>
	<video src="vid/Toram Online pv jp.mp4" autoplay="true" loop="false" muted="true" class="vid"></video>
	<img src="img/layer.png" class="layer">
	{{-- <h1 class="text-primary text-center" style="z-index: 2">Kesahnya ini mo bikin yg mirip kek web LA</h1> --}}
</div>
<div class="isi">
	<div class="img-responsive" align="center" style="margin-top:9%;">
		<a href="">
			<img src="index.png" class="mt-5" width="200" height="200">
		</a>
	</div>

	<div class="mt-2 nav justify-content-center" style="font-size: 26px">
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
</div>

<script>
	
</script>

@endsection