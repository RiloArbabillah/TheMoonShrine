@extends('_layouts.default_layouts')
@section('content')

<style>
.layer{
	position: fixed;
	bottom: 0;
	z-index: 1;
	padding: 0;
	margin: 0;
	background-image: radial-gradient(rgba(0, 0, 0, 0.8) 1px, transparent 1px);
	background-size: 3px 3px;
}	


.vid{
	position: fixed;
	z-index: -1;
	top: -100px;
	left: 0;
	min-width: 100%;
	min-height: 100%;
}
</style>

<div>
	<video src="vid/Toram Online pv jp.mp4" autoplay="true" loop="false" muted="true" class="vid"></video>
	<img src="img/layer.png" class="layer">
	{{-- <h1 class="text-primary text-center" style="z-index: 2">Kesahnya ini mo bikin yg mirip kek web LA</h1> --}}
</div>

<script>
	
</script>

@endsection