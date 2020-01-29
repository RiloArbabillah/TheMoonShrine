@extends('_layouts.admin_layouts')
@section('judul', 'Steganography')
@section('content')
<div class="container-fluid d-flex justify-content-center" style="height: 30.4rem;">
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card mt-5">
			<div class="card-header">
				This is the button to the Encrypt and Decrypt section
			</div>
			<div class="card-body">
				<div class="list-group">
					<span class="">To Encrypt</span>
					<a class="btn btn-primary" href="{{ url('enkripsi') }}">Enkripsi</a>
				</div>
				<div class="list-group mt-2">
					<span>To Decrypt</span>
					<a class="btn btn-danger" href="{{ url('dekripsi') }}">Dekripsi</a>
				</div>
			</div>
		</div>
	</div>
	{{-- @if (isset($msg))
		<div class="col-xl-6 col-md-8">
			<div class="card">
				<div class="card-header">
					
				</div>
				<div class="card-body">
					
				</div>
			</div>
		</div>
	@endif --}}
</div>
@endsection