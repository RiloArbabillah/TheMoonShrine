@extends('_layouts.admin_layouts')
@section('judul', 'Enkripsi')
@section('content')
	<span class="row float-right w-50 mb-4">
		<a href="{{ route('stegano.index') }}" class="btn btn-primary col-md-4 col-sm-4 col-lg-4 col-xl-4">Back</a>
		<a href="{{ url('dekripsi') }}" class="btn btn-primary ml-3 col-md-4 col-sm-4 col-lg-4 col-xl-4">To Decrypt</a>
	</span>
	<div class="container d-flex justify-content-center " style="margin-bottom: 8.6rem;">
		<div class="card w-50">
			<div class="card-header">
				<h4 class="card-title">Enkripsi</h4>
			</div>
			<div class="card-body">
				<form action="{{ route('stegano.store') }}" method="post" enctype="multipart/form-data" class="d-flex flex-column">
					@csrf
					<div class="form-group">
						<span class="form-control-label">Pesan</span>
						<input type="text" name="pesan" class="form-control">
					</div>
					<div class="form-group">
						<span class="form-control-label">Image</span>
						<input type="file" class="form-control-file" name="foto">
					</div>
					<input type="hidden" value="1" name="id">
					<input type="submit" name="" class="btn btn-primary mt-3" value="Encrypt">
				</form>
			</div>
		</div>
	</div>

@endsection