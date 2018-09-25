{{--@if (count($breadcrumbs))

	<ol class="breadcrumb">
		@foreach ($breadcrumbs as $breadcrumb)

			@if ($breadcrumb->url && !$loop->last)
				<li class="breadcrumb-item"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
			@else
				<li class="breadcrumb-item active">{{ $breadcrumb->title }}</li>
			@endif

		@endforeach
	</ol>

@endif--}}

@if (isset($this->breadcrumbs) && count($this->breadcrumbs))
    <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
        <li class="m-nav__item m-nav__item--home">
            <a href="#" class="m-nav__link m-nav__link--icon">
                <i class="m-nav__link-icon la la-home"></i>
            </a>
        </li>

        @foreach ($this->breadcrumbs as $breadcrumb)
            @if (isset($breadcrumb['url']))
                <li class="m-nav__item">
                    <a href="{{ $breadcrumb['url'] }}" class="m-nav__link">
				<span class="m-nav__link-text">
					{{ $breadcrumb['title'] }}
				</span>
                    </a>
                </li>
                <li class="m-nav__separator">
                    -
                </li>
            @else
                <li class="m-nav__item">
                    <a href="#" class="m-nav__link">
				<span class="m-nav__link-text">
					{{ $breadcrumb['title'] }}
				</span>
                    </a>
                </li>
            @endif
        @endforeach
    </ul>
@endif
