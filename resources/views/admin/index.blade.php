@extends('layouts.admin')

@section('title', ' | All Cars')

@section('content')

@include('flash::message')

<h1 class="page-header" style="padding-top:40px;">All Cars</h1>

<div class="table-responsive">
  <table class="table table-striped" id="myTable" class="tablesorter">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Model</th>
        <th>Displacement  {{ config('app.displacement') }}</th>
        <th>Status</th>
        <th>Created</th>
        <th><i class="fa fa-cog" aria-hidden="true"></i></th>
      </tr>
    </thead>
    <tbody>
      @php
      $i = 1
      @endphp
      @foreach ($cars as $car)
      <tr>
        <td>{{ $i++ }}</td>
        <td><a href="{{ $car->path('show') }}">{{ $car->name }}</a></td>
        <td>{{ $car->model }}</td>
        <td>{{ $car->displacement }}</td>
        <td>{{ $car->category->name }}</td>
        <td>{{ $car->created_at }}</td>
        <td>
          <a href="{{ $car->path('edit') }}" class="btn btn-warning">Edit car details</a>

        </td>

      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</div>
</div>
</div>
<div class="text-center">{{ $cars->links() }}</div>
@endsection


</body>
</html>
