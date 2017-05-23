

@extends('layouts.admin')
@section('title', ' | Add car')
@section('content')

<h1 class="page-header" style="padding-top:40px;">Add a new car</h1>

	<div class="row">
		<div class="col-sm-8 ">
		@include('flash::message')
		@include('errors._list')
			<form action="{{ route('admin.cars.update', $car->slug) }}" method="post">
		
		{{ method_field('PUT') }}
		{{ csrf_field() }}
		
			<div class="form-group">
				<label for="name">Name</label>
				<input name="name" type="text" class="form-control" id="name" placeholder="Your name" value="{{ $car->name }}">
			</div>
			<div class="form-group">
				<label for="model">Model</label>
				<input name="model" type="text" class="form-control" id="model" placeholder="model" value="{{ $car->model }}">
			</div>
			<div class="form-group">
				<label for="color">Color</label>
				<input name="color" type="text" class="form-control" id="color" placeholder="color" value="{{ $car->color }}">
			</div>
			<div class="form-group">
				<label for="displacement">displacement</label>
				<input name="displacement" type="text" class="form-control" id="displacement" placeholder="displacement" value="{{ $car->displacement }}">
			</div>
			<div class="form-group">
				<label for="details">Car details</label>
				<textarea name="details" id="details" class="form-control" cols="30" rows="10">{{ $car->details }}</textarea>
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
		</div>
	</div>

@endsection


</body>
</html>



   
