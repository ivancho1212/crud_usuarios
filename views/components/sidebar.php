<div class="app-menu ct-success-text">

    <!-- Brand Logo -->
    <div class="logo-box">
        <!-- Brand Logo Light -->
        <a href="index.html" class="logo-light">
            <img src="https://www.pngall.com/wp-content/uploads/2016/03/Batman-Logo-PNG.png"
                alt="logo" class="logo-lg">
            <img src="https://www.pngall.com/wp-content/uploads/2016/03/Batman-Logo-PNG.png"
                alt="small logo" class="logo-sm">
        </a>

        <!-- Brand Logo Dark -->
        <a href="index.html" class="logo-dark">
            <img src="https://www.pngall.com/wp-content/uploads/2016/03/Batman-Logo-PNG.png"
                alt="dark logo" class="logo-lg">
            <img src="https://www.pngall.com/wp-content/uploads/2016/03/Batman-Logo-PNG.png"
                alt="small logo" class="logo-sm">
        </a>
    </div>

    <!-- menu-left -->
    <div class="scrollbar">

        <!-- User box -->
        <div class="user-box text-center">
            <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="dropdown-toggle h5 mb-1 d-block" data-bs-toggle="dropdown">Geneva
                    Kennedy</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user me-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings me-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock me-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out me-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>
            <p class="text-muted mb-0">Admin Head</p>
        </div>

        <!--- Menu -->
        <ul class="menu">

            <li class="menu-title">Panel de administracion</li>

            <li class="menu-item">
                <a href="?c=dashboard&m=dashboard" class="menu-link">
                    <span class="menu-icon"><i data-feather="monitor"></i></span>
                    <span class="menu-text"> Escritorio </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#menuCompanies" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i data-feather="briefcase"></i></span>
                    <span class="menu-text"> Compañias </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuCompanies">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="?c=companies&m=index" class="menu-link">
                                <span class="menu-text">Listar</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="menu-item">
                <a href="#menuProducts" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i data-feather="shopping-bag"></i></span>
                    <span class="menu-text"> Productos </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuProducts">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="?c=products&m=index" class="menu-link">
                                <span class="menu-text">Listar</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <!--- End Menu -->
        <div class="clearfix"></div>
    </div>
</div>