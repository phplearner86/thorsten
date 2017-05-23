@extends('layouts.admin')

@section('title', ' | All images' )


@section('content')

 <div class="row" style="padding-top: 70px">
   
   @foreach ($photos as $photo)
   <form action="{{ route('admin.destroy.image', $photo->id) }}" method="post" >
			{{ csrf_field() }}
			{{ method_field('DELETE') }}
				<div class="col-md-8 col-md-3"  style=" width: 24%; height: 400px; display:block;">
     <div class="thumbnail" >
      <p>1</p>
       <img src={{ asset($photo->path) }} alt="..." style="padding-bottom: 10px;width: 80%">
       <button class="btn btn-danger btn-lg">Delete</button>
       <p>{{ imageName($photo->path) }}</p>
       
     </div>
   </div>
			
			
		</form>
   
   @endforeach
   
 </div>
<div class="text-center">{{ $photos->links() }}</div>
@endsection





   
