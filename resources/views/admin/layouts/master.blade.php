<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="utf-8" />
	<title>
		@if(isset($this->title)){{$this->title}}@endif
	</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
	<script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
	</script>
	<link href="{{ asset('css/admin/vendors/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('css/admin/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('css/admin/default/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    {{--extend style css--}}
    @stack('styles')
	<link rel="shortcut icon" href="{{ asset('css/admin/default/media/img/logo/favicon.ico') }}" />
</head>
<body  class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
<div class="m-grid m-grid--hor m-grid--root m-page">

	@include('admin.layouts.partials.header')

	<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

		@include('admin.layouts.partials.sidebar')

		<div class="m-grid__item m-grid__item--fluid m-wrapper">

			<div class="m-subheader ">
				<div class="d-flex align-items-center">
					<div class="mr-auto">
						<h3 class="m-subheader__title m-subheader__title--separator">
							@if(isset($this->title)) {{$this->title}} @endif
						</h3>

						<!-- Section breandcrubs -->
						@include('admin.layouts.partials.breadcrumbs')

					</div>
				</div>
			</div>
			
			<div class="m-content">

				@yield('content')

			</div>
		</div>
	</div>

	@include('admin.layouts.partials.footer')

</div>

<div id="m_scroll_top" class="m-scroll-top">
	<i class="la la-arrow-up"></i>
</div>

<script src="{{ asset('js/admin/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/admin/default/base/scripts.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/admin/default/custom/header/actions.js') }}" type="text/javascript"></script>

{{--extend scripts--}}
@stack('scripts')

</body>
</html>
