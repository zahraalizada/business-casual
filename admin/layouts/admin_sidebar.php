<body id="page-top">
<div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-coffee"></i>
            </div>
            <div class="sidebar-brand-text mx-3">BS Casual </div>
        </a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?= $page=='index' ? 'active' : ''; ?>">
            <a class="nav-link" href="index.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Pages
        </div>
        <li class="nav-item <?= $page=='home' ? 'active' : ''; ?>">
            <a class="nav-link collapsed" href="home.php" >
                <i class="fas fa-home"></i>
                <span>Home</span>
            </a>
        </li>
        <li class="nav-item <?= $page=='about' ? 'active' : ''; ?>">
            <a class="nav-link collapsed" href="about.php" >
                <i class="fas fa-info-circle"></i>
                <span>About</span>
            </a>
        </li>
        <li class="nav-item <?= $page=='products' ? 'active' : ''; ?>">
            <a class="nav-link collapsed" href="products.php" >
                <i class="fas fa-mug-hot"></i>
                <span>Products</span>
            </a>
        </li>
        <li class="nav-item <?= $page=='store' ? 'active' : ''; ?>">
            <a class="nav-link collapsed" href="store.php" >
                <i class="fas fa-store"></i>
                <span>Store</span>
            </a>
        </li>
        <li class="nav-item <?= $page=='work_time' ? 'active' : ''; ?>">
            <a class="nav-link collapsed" href="work_time.php" >
                <i class="fas fa-hourglass"></i>
                <span>Work Time</span>
            </a>
        </li>



        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline mt-3">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>
    <!-- End of Sidebar -->