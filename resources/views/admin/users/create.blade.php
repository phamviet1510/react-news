<?php
$this->title = 'Thêm mới người dùng';
$this->breadcrumbs[] = ['title' => 'Quản lý người dùng', 'url' => url('admin/users')];
$this->breadcrumbs[] = ['title' => 'Thêm mới người dùng'];

?>
@extends('admin.layouts.master')

@section('title', $this->title)
@section('title_header', $this->title)

@section('content')
    <div class="m-portlet m-portlet--tab">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <span class="m-portlet__head-icon m--hide">
                        <i class="la la-gear"></i>
                    </span>
                    <h3 class="m-portlet__head-text">
                        Thêm mới người dùng
                    </h3>
                </div>
            </div>
        </div>
        <!--begin::Form-->
        {{ Form::open(array('route' => 'users.store', 'class' => 'm-form m-form--fit m-form--label-align-right')) }}
            <div class="m-portlet__body">
                <div class="form-group m-form__group">
                    {{ Form::label('email', 'Email') }}
                    {{ Form::text('email', '', array('class' => 'form-control m-input', 'aria-describedby' => 'emailHelp', 'placeholder' => 'Nhập email')) }}
                    <span class="m-form__help">We'll never share your email with anyone else.</span>
                </div>
                <div class="form-group m-form__group">
                    {{ Form::label('password', 'Mật khẩu') }}
                    {{ Form::password('password', array('class' => 'form-control m-input', 'placeholder' => 'Nhập mật khẩu')) }}
                </div>
                <div class="form-group m-form__group">
                    {{ Form::label('password', 'Xác nhận lại mật khẩu') }}
                    {{ Form::password('password_confirmation', array('class' => 'form-control m-input', 'placeholder' => 'Nhập mật khẩu')) }}
                </div>
                <div class="form-group m-form__group">
                    {{ Form::label('name', 'Họ tên') }}
                    {{ Form::text('name', '', array('class' => 'form-control m-input', 'placeholder' => 'Nhập tên')) }}
                </div>
                <div class="form-group m-form__group">
                    {{ Form::label('phone', 'Số điện thoại') }}
                    {{ Form::text('phone', '', array('class' => 'form-control m-input', 'placeholder' => 'Nhập số điện thoại')) }}
                </div>
            </div>
            @if ($errors->any())
                <ul>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </ul>
            @endif
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions">

                    {{ Form::submit('Xác nhận', array('class' => 'btn btn-primary')) }}
                    <a type="reset" class="btn btn-secondary" href="{{url('admin/users')}}">Hủy bỏ</a>
                </div>
            </div>
        {{ Form::close() }}
        <!--end::Form-->
    </div>


@endsection