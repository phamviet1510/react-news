<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="/" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel 5.5 with React 16 Boilerplate') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/admin/vendors/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/admin/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/admin/default/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
<div id="app">
    @yield('content')
dfgdfgdfgdfgfdgdfg
<!-- Scripts -->

<script src="{{mix('/js/app.js')}}"></script>
</body>
</html>
