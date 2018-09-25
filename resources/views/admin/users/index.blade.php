<?php
$this->title = 'Quản lý người dùng';
$this->breadcrumbs[] = ['title' => 'Quản lý người dùng', 'url' => url('admin/users')];
$this->breadcrumbs[] = ['title' => 'Danh sách người dùng'];

?>
@extends('admin.layouts.master')

@section('title', $this->title)
@section('title_header', $this->title)

@section('content')
    @if (Session::has('message'))
        <div class="flash alert">
            <p>{{ Session::get('message') }}</p>
        </div>
    @endif
    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Danh sách người dùng
                    </h3>
                </div>
            </div>
            <div class="m-portlet__head-tools">
                <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item">
                        <a href="{{url('admin/users/create')}}" class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
                            <span>
                                <i class="la la-plus"></i>
                                <span>
                                    Thêm mới
                                </span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="m-portlet__body">
        @if ($users->count())
            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover">
                <thead>
                <tr>
                    <th>
                        STT
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        Họ tên
                    </th>
                    <th>
                        Số điện thoại
                    </th>
                    <th>
                        Thời gian tạo
                    </th>
                    <th>
                        Trạng thái
                    </th>
                    <th>
                        Thao tác
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td><span class="m-badge  m-badge--success m-badge--wide">Active</span></td>
                        <td>
                            {{ link_to_route('users.edit', 'Edit', array($user->id), array('class' => 'btn btn-info btn-sm')) }}
                            {{ Form::open(array('method'
                                => 'DELETE', 'route' => array('users.destroy', $user->id), 'style' => 'display:inline-block')) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-sm btn-danger')) }}
                            {{ Form::close() }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
                {{  $users->links() }}
        </div>
        @else
            There are no users
        @endif
    </div>

@endsection
@push('scripts')
    <script src="{{ asset('js/admin/vendors/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>
@endpush