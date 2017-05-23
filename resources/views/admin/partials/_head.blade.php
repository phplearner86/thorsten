<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

{{-- CSRF Token --}}
<meta name="csrf-token" content="{{ csrf_token() }}">

<meta name="Branislav Sindjelic" content="">
<link rel="icon" href="../../favicon.ico">

<title>{{ config('app.name') }} @yield('title')</title>

<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

@yield('links')

<link rel="stylesheet" href="{{ asset('css/custom.css') }}">

<!-- Script-->
<!-- javascript kontakt sa bazom -->
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ])!!};
</script>
    