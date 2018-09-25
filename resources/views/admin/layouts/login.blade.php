<!DOCTYPE html>
<html lang="en" >
<!-- begin::Head -->
<head>
    <meta charset="utf-8" />
    <title>
        @if(isset($title)){{$title}}@endif
    </title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <link href="{{ asset('css/admin/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/admin/default/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="{{ asset('css/admin/default/media/img/logo/favicon.ico') }}" />
</head>
<!-- end::Head -->
<!-- end::Body -->
<body  class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-1" id="m_login" style="background-image: url({{asset('css/admin/app/media/img//bg/bg-1.jpg')}});">
        @yield('content')
    </div>
</div>
<script src="{{ asset('js/admin/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/admin/default/base/scripts.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/admin/snippets/custom/pages/user/login.js') }}" type="text/javascript"></script>
</body>
</html>
