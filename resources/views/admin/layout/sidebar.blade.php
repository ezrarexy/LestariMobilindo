        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-user-shield"></i>
                </div>
                <div class="sidebar-brand-text mx-3">LM Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ $pej->link == '/' ? 'active' : '' }}">
                <a class="nav-link" href="/">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Cars
            </div>

            <li class="nav-item {{ $pej->link == 'cars' ? 'active' : '' }}">
                <a class="nav-link" href="/cars">
                    <i class="fas fa-fw fa-car"></i>
                    <span>All Cars</span></a>
            </li>

            <li class="nav-item {{ $pej->link == 'brands' ? 'active' : '' }}">
                <a class="nav-link" href="/brands">
                    <i class="fas fa-copyright"></i>
                    <span>Brands</span></a>
            </li>

            <li class="nav-item {{ $pej->link == 'categories' ? 'active' : '' }}">
                <a class="nav-link" href="/categories">
                    {{-- <i class="fas fa-fw fa-chart-area"></i> --}}
                    <i class="fas fa-th-large"></i>
                    <span>Categories</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Tools
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->