<form action="{{ route('admin.cars.edit.images', [$photo->car->slug, $photo->id]) }}" method="post" enctype="multipart/form-data">
	<div class="checkbox">
		<label>
			<input type="checkbox" name="main" value="1"
			{{ checked($photo->main, true)  }}
			> <b>Main Image</b>
		</label>
	</div>
	<a href="#" class="thumbnail">
		<img src="{{ asset($photo->path) }}" alt="..." style="max-height: 100%; width: 90%;">
	</a>

	<!-- Edit -->
	<div >
		<span>

			{{ csrf_field() }}
			{{ method_field('PUT') }}

			<input type="file" name="photo" id="photo" style="padding-bottom: 10px">
		</span>

		<span class="flex justify-start">
			<button class="btn btn-primary">Change</button>

</form>
	
	
	<!-- Delete -->
	
		<form action="{{ route('admin.cars.destroy.images', [$photo->car->slug, $photo->id]) }}" method="post" >
			{{ csrf_field() }}
			{{ method_field('DELETE') }}
			
			<button class="btn btn-danger btn-sm">Delete</button>
		</form>
	</span>
</div>