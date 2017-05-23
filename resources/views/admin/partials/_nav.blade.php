<div class="container-fluid">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
  </div>
  <div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-left">
      <li><a href="{{ route('admin.cars.index') }}">All Cars</a></li>
      <li><a href="{{ route('admin.cars.create') }}">Add New Car</a></li>
      <li><a href="{{ route('admin.images.index') }}">All Images</a></li>
    </ul>
  </div>
</div>