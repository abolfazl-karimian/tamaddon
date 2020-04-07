@extends('admin.layouts.template')

@section('pageTitle', 'کنترل پنل مدیریت|اطلاعات ادمین')

{{-- Page Header Text --}}
@section('pageHeaderTitle','اطلاعات ادمین')

{{-- Page BreadCrumb Address --}}
@section('breadCrumb')
    @parent
    <li class="breadcrumb-item active">اطلاعات ادمین</li>
@endsection

{{-- content --}}

@section('contentTitle', 'اطلاعات ادمین')

@section('addButton')
    <a href="{{ route('admin.user.edit', $admin->id) }}" class="btn btn-info">ویرایش اطلاعات ادمین</a>
@endsection
@section('contentBody')
    <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>نام و نام خانوادگی</th>
            <th>ایمیل</th>
            <th>شماره تلفن</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ $admin->getFullNameAttribute() }}</td>
            <td>{{ $admin->email }}</td>
            <td>{{ $admin->phone_number }}</td>
        </tr>
        </tbody>
    </table>
@endsection

