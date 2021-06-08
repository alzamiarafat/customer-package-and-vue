<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <!-- <div class="app-sidebar__user">
        <img class="app-sidebar__user-avatar" src="{{ asset('img/avatar.jpg') }}" alt="User Image" />
        <div>
            <p class="app-sidebar__user-name">John Doe</p>
            <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
    </div> -->
    <ul class="app-menu">
        <li>
            <a class="app-menu__item {{request()->routeIs('dboard.') ? 'active' : ''}}" href="{{route('dboard.')}}">
                <i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Dashboard</span>
            </a>
        </li>
        <li class="treeview {{request()->routeIs(['dboard.user.create','dboard.user.index']) ? 'is-expanded' : ''}}">
            <a class="app-menu__item {{request()->routeIs(['dboard.user.create','dboard.user.index']) ? 'active' : ''}}" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Users</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li>
                    <a class="treeview-item {{request()->routeIs(['dboard.user.create']) ? 'active' : ''}}" href="{{ route('dboard.user.create') }}"><i class="icon fa fa-user-plus"></i> Add User</a>
                </li>
                <li>
                    <a class="treeview-item {{request()->routeIs(['dboard.user.index']) ? 'active' : ''}}" href="{{ route('dboard.user.index') }}" rel="noopener"><i class="icon fa fa-circle-o"></i> User List</a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Forms</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li>
                    <a class="treeview-item" href="{{ route('dboard.form-components') }}"><i class="icon fa fa-circle-o"></i> Form Components</a>
                </li>
                <li>
                    <a class="treeview-item" href="{{ route('dboard.custom-form-components') }}"><i class="icon fa fa-circle-o"></i> Custom Components</a>
                </li>
                <li>
                    <a class="treeview-item" href="{{ route('dboard.form-sample') }}"><i class="icon fa fa-circle-o"></i> Form Samples</a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Tables</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li>
                    <a class="treeview-item" href="table-basic.html"><i class="icon fa fa-circle-o"></i> Basic Tables</a>
                </li>
                <li>
                    <a class="treeview-item" href="table-data-table.html"><i class="icon fa fa-circle-o"></i> Data Tables</a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Pages</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li>
                    <a class="treeview-item" href="blank-page.html"><i class="icon fa fa-circle-o"></i> Blank Page</a>
                </li>
                <li>
                    <a class="treeview-item" href="page-login.html"><i class="icon fa fa-circle-o"></i> Login Page</a>
                </li>
                <li>
                    <a class="treeview-item" href="page-lockscreen.html"><i class="icon fa fa-circle-o"></i> Lockscreen Page</a>
                </li>
                <li>
                    <a class="treeview-item" href="page-user.html"><i class="icon fa fa-circle-o"></i> User Page</a>
                </li>
                <li>
                    <a class="treeview-item" href="page-invoice.html"><i class="icon fa fa-circle-o"></i> Invoice Page</a>
                </li>
                <li>
                    <a class="treeview-item" href="page-calendar.html"><i class="icon fa fa-circle-o"></i> Calendar Page</a>
                </li>
                <li>
                    <a class="treeview-item" href="page-mailbox.html"><i class="icon fa fa-circle-o"></i> Mailbox</a>
                </li>
                <li>
                    <a class="treeview-item" href="page-error.html"><i class="icon fa fa-circle-o"></i> Error Page</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
