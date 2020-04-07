@extends('admin.layouts.template')

@section('pageTitle', 'کنترل پنل مدیریت|نظرات')

{{-- Page Header Text --}}
@section('pageHeaderTitle','نظرات')

{{-- Page BreadCrumb Address --}}
@section('breadCrumb')
    @parent
    <li class="breadcrumb-item active">نظرات</li>
@endsection

{{-- content --}}

@section('contentTitle', 'نظرات تائید شده')


@section('contentBody')
    <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>نام و نام خانوادگی</th>
            <th>نظر</th>
            <th>ارسال شده در</th>
            <th>اعمال</th>
        </tr>
        </thead>
        <tbody>
        @foreach($unConfirmedComments as $comment)
            <tr>
                <td>{{ $comment['FirstName'] }} {{ ' ' }} {{ $comment['LastName'] }}</td>
                <td>{{ $comment['Body'] }}</td>
                <td><?php  echo $v=new Verta($comment['created_at']); ?></td>
                <td>
                    <Delete url="{{ route('admin.comment.destroy', $comment->id) }}"></Delete>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $unConfirmedComments->links() !!}
@endsection
