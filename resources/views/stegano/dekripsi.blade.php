@extends('_layouts.admin_layouts')
@section('judul', 'Dekripsi')
@section('content')
	<span class="float-right mr-4" style="width: 7rem;">
		<a href="{{ route('stegano.index') }}" class="btn btn-primary w-100">Back</a>
	</span>
	<div class="container d-flex justify-content-center " style="margin-bottom: 13.5rem;">
		<div class="card w-50">
			<div class="card-header">
				<h4 class="card-title">Dekripsi</h4>
			</div>
			<div class="card-body">
				<form action="{{ route('stegano.store') }}" method="post" enctype="multipart/form-data" class="d-flex flex-column">
					@csrf
					<div class="form-group">
						<span class="form-control-label">Image</span>
						<input type="file" class="form-control-file" name="foto">
					</div>
					<input type="hidden" name="id" value="2">
					<input type="submit" name="" class="btn btn-primary mt-3" value="Decrypt">
				</form>
			</div>
			@if (isset($pesan))
				<div class="card-footer">
					<h5 class="card-info">Hasil Dekripsi</h5>
				<p>{{ $pesan }}</p>
				</div>
			@endif
		</div>
	</div>

@endsection