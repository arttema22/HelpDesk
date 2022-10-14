<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin') }}" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Админка</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('admin.service') }}" class="nav-link {{ Request::is('admin/service') ? " active"
                        : "" }}"><i class="fas fa-copy nav-icon"></i>
                        <p>Услуги</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.role') }}" class="nav-link {{ Request::is('admin/role') ? " active" : ""
                        }}"><i class="far fa-circle nav-icon"></i>
                        <p>Роли</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.permission') }}" class="nav-link {{ Request::is('admin/permission') ? "
                        active" : "" }}"><i class="far fa-circle nav-icon"></i>
                        <p>Права</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.user') }}" class="nav-link {{ Request::is('admin/user') ? " active" : ""
                        }}"><i class="far fa-circle nav-icon"></i>
                        <p>Пользователи</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
