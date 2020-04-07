@extends('admin.layouts.template')

@section('pageTitle', 'کنترل پنل مدیریت|پیشنهادات')

{{-- Page Header Text --}}
@section('pageHeaderTitle','پیشنهادات')

{{-- Page BreadCrumb Address --}}
@section('breadCrumb')
    @parent
    <li class="breadcrumb-item active">پیشنهادات</li>
@endsection

{{-- content --}}

@section('contentTitle', 'لیست پیشنهادات')


@section('contentBody')
    <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>نام و نام خانوادگی</th>
            <th>ایمیل</th>
            <th>پیام</th>
            <th>ارسال شده در</th>
        </tr>
        </thead>
        <tbody>
        @foreach($suggestions as $suggestion)
            <tr>
                <td>{{ $suggestion['FullName'] }}</td>
                <td>{{ $suggestion['Email'] }}</td>
                <td>{{ $suggestion['Message'] }}</td>
                <td><?php  echo $v=new Verta($suggestion['created_at']); ?></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $suggestions->links() !!}
@endsection
