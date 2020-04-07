@extends('admin.layouts.template')

@section('pageTitle', 'کنترل پنل مدیریت|اطلاعات ادمین')

{{-- Page Header Text --}}
@section('pageHeaderTitle','اطلاعات ادمین')

{{-- Page BreadCrumb Address --}}
@section('breadCrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">اطلاعات ادمین</a></li>
    <li class="breadcrumb-item active">ویرایش اطلاعات ادمین</li>

@endsection

{{-- content --}}

@section('contentTitle', 'اطلاعات ادمین')

@section('contentBody')

    <form method="POST" action="{{ route('admin.user.update', $admin->id) }}">
        @csrf
        @method('PATCH')
        <div class="row" style="display: flex; justify-content: center">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="firstname">نام</label>
                    @if($errors->has('first_name'))
                        <span class="text-danger">{{ $errors->first('first_name') }}</span>
                    @endif
                    <input type="text" class="form-control" name="first_name" id="firstname" value="{{ old('first_name', $admin->first_name) }}" placeholder="نام">
                </div>
                <div class="form-group">
                    <label for="firstname">نام خانوادگی</label>
                    @if($errors->has('last_name'))
                        <span class="text-danger">{{ $errors->first('last_name') }}</span>
                    @endif
                    <input type="text" class="form-control" name="last_name" id="firstname" value="{{ old('last_name', $admin->last_name) }}" placeholder="نام خانوادگی">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">ایمیل</label>
                    @if($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                    <input type="email" class="form-control" name="email" id="email" value="{{ old('email', $admin->email) }}" placeholder="ایمیل">
                </div>
                <div class="form-group">
                    <label for="firstname">شماره تلفن</label>
                    @if($errors->has('phone_number'))
                        <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                    @endif
                    <input type="text" class="form-control" name="phone_number" id="phone_number" value="{{ old('phone_number', $admin->phone_number) }}" placeholder="شماره تلفن">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">رمز عبور</label>
                    @if($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                    <input type="text" class="form-control" name="password" id="password" placeholder="رمز عبور">
                </div>
                <button type="submit" class="btn btn-primary">ارسال</button>
            </div>
        </div>
    </form>
@endsection
