

@extends('layouts.admin')
@section('title', ' | Add car')
@section('content')

<h1 class="page-header" style="padding-top:40px;">Add a new car</h1>

	<div class="row">
		<div class="col-sm-8 ">
			<form action="{{ route('admin.cars.store') }}" method="post">
		@include('flash::message')
		@include('errors._list')
		{{ csrf_field() }}
		
			<div class="form-group">
				<label for="name">Name</label>
				<input name="name" type="text" class="form-control" id="name" placeholder="Car name" value="{{ old('name') }}">
			</div>
			<div class="form-group">
				<label for="model">Model</label>
				<input name="model" type="text" class="form-control" id="model" placeholder="model" value="{{ old('model') }}">
			</div>
			<div class="form-group">
				<label for="color">Color</label>
				<input name="color" type="text" class="form-control" id="color" placeholder="color" value="{{ old('color') }}">
			</div>
			<div class="form-group">
				<label for="displacement">displacement</label>
				<input name="displacement" type="text" class="form-control" id="displacement" placeholder="displacement" value="{{ old('displacement') }}">
			</div>
			<div class="form-group">
				<label for="details">Car details</label>
				<textarea name="details" id="details" class="form-control" cols="30" rows="10">{{ old('details') }}</textarea>
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
		</div>
	</div>

@endsection


</body>
</html>



   
