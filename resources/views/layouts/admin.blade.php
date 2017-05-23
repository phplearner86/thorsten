
<!DOCTYPE html>
<html lang="en">
<head>

  @include('admin.partials._head')

</head>

<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    @include('admin.partials._nav')
  </nav>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-11 col-sm-offset-1 col-md-11 col-md-offset-1">

       @yield('content')

     </div>
   </div>
 </div>

 @include('admin.partials._scripts')

</body>
</html>
