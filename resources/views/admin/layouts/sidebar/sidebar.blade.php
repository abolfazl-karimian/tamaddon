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
            <li class="{{ Route::is('admin.user.index')? 'active' : '' }}">
                <a href="{{ route('admin.user.index') }}" style="margin-right: 10px;">
                    <i class="fas fa-user"></i> <span>اطلاعات ادمین</span>
                </a>
            </li>
            <li class="{{ Route::is('admin.suggestion.index')? 'active' : '' }}">
                <a href="{{ route('admin.suggestion.index') }}">
                    <i class="fa fa-lightbulb-o"></i> <span>پیشنهادات</span>
                </a>
            </li>
            <li class="treeview">
                    <a href="#" style="margin-right: 10px">
                        <i class="fas fa-key {{ Route::is('admin.comment.*')? 'active' : '' }}"></i> <span>نظرات</span>
                        <span class="pull-left-container">
                    <i class="fa fa-angle-right pull-left"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                            <li class="{{ Route::is('admin.comment.index')? 'active' : '' }}"><a href="{{ route('admin.comment.index') }}"><i class="fas fa-comment"  style="margin-left: 5px"></i>نظرات تائید شده</a></li>
                        <li class="{{ Route::is('admin.comment.un-confirmedComments')? 'active' : '' }}"><a href="{{ route('admin.comment.un-confirmedComments') }}"><i class="fas fa-comment text-danger"  style="margin-left: 5px"></i>نظرات تائید نشده</a></li>
                    </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
