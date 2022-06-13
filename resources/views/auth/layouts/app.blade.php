<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} - @yield('title')</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('dashboardpage/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboardpage/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboardpage/dist/css/adminlte.min.css?v=3.2.0') }}">
<body class="hold-transition @yield('body-page')">

@yield('content')

<script src="{{ asset('dashboardpage/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('dashboardpage/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dashboardpage/dist/js/adminlte.min.js?v=3.2.0') }}"></script>
</body>
</html>
