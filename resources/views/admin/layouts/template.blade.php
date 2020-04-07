<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@section('pageTitle') کنترل پنل مدیریت@show</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap-theme.css')}}">
    <!-- Bootstrap rtl -->
    <link rel="stylesheet" href="{{asset('dist/css/rtl.css')}}">
    <!-- Font Awesome -->
    <script
        src="https://kit.fontawesome.com/f3d6ed13d2.js"
        crossorigin="anonymous"
    ></script>
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    {{--Additional Head CSS--}}
    @yield("additional-head-css")
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div id="app" class="wrapper">

    @include('admin.layouts.navbar.navbar');

    @include('admin.layouts.sidebar.sidebar');

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="margin-top: -20px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                @section('pageHeaderTitle') داشبورد @show
                <small>@section('pageHeaderTitleSmall') @show</small>
            </h1>
            <ol class="breadcrumb">
                @section('breadCrumb')
                    <li class="breadcrumb-item"><a
                            href="{{ route('admin.dashboard.index') }}">داشبورد</a></li>
                @show
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">@yield('contentTitle')</h3>

                    <div class="box-tools pull-right">
                        @yield('addButton')
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                title="جمع شود">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="حذف">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    @yield('contentBody')
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    @yield('contentFooter')
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.sidebar-menu').tree()
    })
</script>
</body>
</html>
