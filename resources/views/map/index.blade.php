@extends('_layouts.admin_layouts')
@section('judul', 'Maps')
@section('content')

	<div class="container-fluid d-flex flex-column">
		{{-- Top Buttons --}}
		<div class="d-flex card-link justify-content-end mb-3">
			<a class="btn btn-primary mr-3" href="{{ url('import/eksport') }}">
				<i></i>
				<span>Import/Eksport</span>
			</a>

			{{-- <a onclick="form(1)" class="btn btn-primary" >
				<i></i>
				<span>Add</span>
			</a> --}}
		</div>
		<div class="d-flex mb-5">
			<form action="{{ url('import') }}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<span for="excel" class="control-label">Upload File</span>
					<input id="excel" type="file" class="" name="excel">
				</div>
				<input type="submit" class="btn btn-primary" value="eksport">
			</form>
		</div>
		<a href="{{ route('maps.eksport') }}" class="btn btn-success">
			<i></i>
			<span>Eksport</span>
		</a>
		{{-- button click div --}}
		{{-- <div id="demo" style="display:none">
			<form action="">
				@csrf
				<input type="text">
			</form>
			<p>this is a form</p>
		</div> --}}

		{{-- Main Content --}}
		@if (isset($data))
		@foreach ($array as $element)
			<div class="card">
				<div class="card-header">
					
				</div>
				<div class="card-body">
					
				</div>
				<div class="card-footer">
					
				</div>
			</div>
		@endforeach
			
		@endif
	</div>
	
	<script type="text/javascript">
	var a=1;
		function form(number){
			a = a + number;
			if (a % 2 == 0)
				document.getElementById('demo').style.display='block';
			else
				document.getElementById('demo').style.display='none';
		}
	</script>

@endsection