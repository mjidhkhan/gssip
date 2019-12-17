<aside class="main-sidebar sidebar-dark-primary elevation-1">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src={{ asset('./images/sip-2.png')}} alt="G3T" class="brand-image elevation-0">
        <span class="brand-text font-weight-light text-lg text-orange">G3T </span> <span class="brand-text font-weight-light text-sm text-yellow">SIP Configuration </span> 
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src={{ asset("./images/bm_avt.jpg")}} class="brand-image img-circle elevation-0" alt="User Image"  style="opacity: 1">
            </div>
            <div class="info">
                <a class="d-block" href="#">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <router-link tag="a" to="/dashboard" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link tag="a" to="/users" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Users</p>
                    </router-link>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->

    </div>
    <!-- /.sidebar -->
</aside>