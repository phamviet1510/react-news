@extends('admin.layouts.login')
@section('content')
<div class="m-grid__item m-grid__item--fluid m-login__wrapper">
    <div class="m-login__container">
        <div class="m-login__logo">
            <a href="#">
                <img src="{{asset('/css/admin/app/media/img//logos/logo-1.png')}}">
            </a>
        </div>
        <div class="m-login__signin">
            <div class="m-login__head">
                <h3 class="m-login__title">
                    Đăng nhập Admin
                </h3>
            </div>
            <form id="login_form" class="m-login__form m-form" method="POST" action="{{ url('admin/login') }}">
                @if($errors->has('errorlogin'))
                    <div class="m-alert m-alert--outline alert alert-danger alert-dismissible animated fadeIn" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                        <span>{{$errors->first('errorlogin')}}</span>
                    </div>
                @endif

                {{ csrf_field() }}

                <div class="form-group m-form__group @if($errors->has('email')) {{'has-danger'}} @endif">
                    <input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off">
                    <div id="email-error" class="form-control-feedback">{{ $errors->first('email') }}</div>
                </div>
                <div class="form-group m-form__group @if($errors->has('password')) {{'has-danger'}} @endif">
                    <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Nhập mật khẩu" name="password">
                    <div id="password-error" class="form-control-feedback">{{ $errors->first('password') }}</div>
                </div>
                {{--<div class="row m-login__form-sub">--}}
                    {{--<div class="col m--align-left m-login__form-left">--}}
                        {{--<label class="m-checkbox  m-checkbox--light">--}}
                            {{--<input type="checkbox" name="remember">--}}
                            {{--Ghi nhớ--}}
                            {{--<span></span>--}}
                        {{--</label>--}}
                    {{--</div>--}}
                    {{--<div class="col m--align-right m-login__form-right">--}}
                        {{--<a href="javascript:;" id="m_login_forget_password" class="m-link">--}}
                            {{--Quên mật khẩu ?--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="m-login__form-action">
                    <button id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primary">
                        Đăng nhập
                    </button>
                </div>
            </form>
        </div>

       {{-- @include('admin.home.signup')

        @include('admin.home.forget ')
--}}
        {{--<div class="m-login__account">
                        <span class="m-login__account-msg">
                            Don't have an account yet ?
                        </span>
            &nbsp;&nbsp;
            <a href="javascript:;" id="m_login_signup" class="m-link m-link--light m-login__account-link">
                Sign Up
            </a>
        </div>--}}
    </div>
</div>
@endsection