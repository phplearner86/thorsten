@extends('layouts.admin')

@section('title', ' | ' .$car->name)

@section('links')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">
@endsection

@section('content')

<h1 class="page-header" style="padding-top:40px;">
    Details for: {{ $car->name }}
<div class="pull-right"><form action="{{ route('admin.cars.destroy', $car->slug) }}" method="post">

       {{ csrf_field() }}
       {{ method_field('DELETE') }}

        <button  class="btn btn-danger">Remove car from database</button>
    </form></div>
</h1>

<div class="row">

  <div class="col-lg-5">
    <p > Displacement {{$car->displacement}} {{ config('app.displacement') }}</p>
    <p>Color: {{ $car->color }}</p>
    <p>Status: {{ $car->category->name }}</p>
    
     {{-- <div class="row"> --}}
     <h3>Main image: </h3>
      <div  style="text-align: center; margin-top: 10px;max-width: 500px">
        @if ($main)
        <img src="{{ asset($main->path) }}" alt="" style="max-width: 100%">
    @else
        <img src="http://placehold.it/350x150" alt="">
    @endif
      </div>
   {{--  </div> --}}
  </div>
  
  <div class="col-lg-6 ">
    
<div class="row">
   <div class="col-md-10 col-md-offset-1" style="margin-bottom: 30px">
       <form action="{{ $car->path('store.images') }}" method="post" class="dropzone" id="carDropzone">

              {{ csrf_field() }}
       </form>
   </div> 
 </div> 

    <div class="row">

        
          @foreach ($images as $photo)

          <div class="col-sm-7 col-sm-4" style="border: 1px solid black;  margin: 1px; height: 300px;width: 200px; overflow:auto;">

            @include('images.edit')

          </div>
        @endforeach
        

    </div>

  </div>

</div>  

 

@endsection

@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
@endsection



   
