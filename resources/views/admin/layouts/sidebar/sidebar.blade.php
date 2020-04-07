<!-- right side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-right image">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-right info">
                <p>{{ $admin->getFullNameAttribute() }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> آنلاین</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">منو</li>
            <li class="{{ Route::is('admin.dashboard.index')? 'active' : '' }}">
                <a href="{{ route('admin.dashboard.index') }}">
                    <i class="fa fa-dashboard"></i> <span>داشبرد</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
