<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
        <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
            <div class="d-flex align-items-center">
                <div class="avatar-lg me-4">
                    <img src="<?= base_url('tempset/') ?>assets/img/team/profile-picture-3.jpg" class="card-img-top rounded-circle border-white" alt="ProfilePic">
                </div>
                <div class="d-block">
                    <h2 class="h5 mb-3">Hi, Admin</h2>
                    <a href="<?= base_url('tempset/') ?>pages/examples/sign-in.html" class="btn btn-secondary btn-sm d-inline-flex align-items-center">
                        <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                        </svg>
                        Sign Out
                    </a>
                </div>
            </div>
            <div class="collapse-close d-md-none">
                <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
                    <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
        <ul class="nav flex-column pt-3 pt-md-0">
            <li class="nav-item">
                <a href="<?= base_url('tempset/') ?>index.html" class="nav-link d-flex align-items-center">
                    <span class="sidebar-icon">
                        <i class="fas fa-car fa-2x text-secondary"></i>
                    </span>
                    <span class="mt-1 ms-1 sidebar-text">JBM Admin Panel</span>
                </a>
            </li>
            <!-- <li class="nav-item active"> -->
            <li class="nav-item">
                <a href="<?= site_url('admin/index') ?>" class="nav-link">
                    <span class="sidebar-icon">
                        <i class="fas fa-chart-pie icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20">
                        </i>
                    </span>
                    <span class="sidebar-text">Dashboard</span>
                </a>
            </li>
            <!-- <li class="nav-item">
                <a href="<?= site_url('service/index') ?>" class="nav-link">
                    <span class="sidebar-icon">
                        <i class="fas fa-archive icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20">
                        </i>
                    </span>
                    <span class="sidebar-text">Kelola Booking</span>
                </a>
            </li> -->
            <li class="nav-item">
                <a href="<?= site_url('service/index') ?>" class="nav-link">
                    <span class="sidebar-icon">
                        <i class="fas fa-cog icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20">
                        </i>
                    </span>
                    <span class="sidebar-text">Kelola Service</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= site_url('sparepart/index') ?>" class="nav-link">
                    <span class="sidebar-icon">
                        <i class="fas fa-wrench icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20">
                        </i>
                    </span>
                    <span class="sidebar-text">Kelola Sparepart</span>
                </a>
            </li>
            <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>

            <li class="nav-item">
                <a href="<?= site_url('sparepart/index') ?>" class="nav-link">
                    <span class="sidebar-icon">
                        <i class="fas fa-book icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20">
                        </i>
                    </span>
                    <span class="sidebar-text">Laporan Transaksi</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?= base_url('tempset/') ?>pages/upgrade-to-pro.html" class="btn btn-secondary d-flex align-items-center justify-content-center btn-upgrade-pro">
                    <span class="sidebar-icon d-inline-flex align-items-center justify-content-center">
                        <i class="fas fa-fire me-2" fill="currentColor" viewBox="0 0 20 20">
                        </i>
                    </span>
                    <span>Upgrade to Pro</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
<main class="content">
    <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
        <div class="container-fluid px-0">
            <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                <div class="d-flex align-items-center">
                    <h4>
                        <?php
                        $dat = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
                        $date = $dat->format('H');
                        if ($date < 12)
                            echo "<i class='fa fa-sun' aria-hidden='true'></i> Selamat Pagi, ";
                        else if ($date < 17)
                            echo "<i class='fa fa-cloud-sun' aria-hidden='true'></i> Selamat Siang, ";
                        else if ($date < 20)
                            echo "<i class='fa fa-cloud-moon' aria-hidden='true'></i> Selamat Sore, ";
                        else
                            echo "<i class='fa fa-moon' aria-hidden='true'></i> Selamat Malam, ";
                        ?> <?= $tbl_user['nickname'] ?>!
                    </h4>
                </div>
                <!-- Navbar links -->
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item dropdown">
                        <a class="nav-link text-dark notification-bell unread dropdown-toggle" data-unread-notifications="true" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                            <svg class="icon icon-sm text-gray-900" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                                </path>
                            </svg>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-center mt-2 py-0">
                            <div class="list-group list-group-flush">
                                <a href="#" class="text-center text-primary fw-bold border-bottom border-light py-3">Notifications</a>
                                <a href="#" class="list-group-item list-group-item-action border-bottom">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <img alt="Image placeholder" src="<?= base_url('tempset/') ?>assets/img/team/profile-picture-1.jpg" class="avatar-md rounded">
                                        </div>
                                        <div class="col ps-0 ms-2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h4 class="h6 mb-0 text-small">Jose Leos</h4>
                                                </div>
                                                <div class="text-end">
                                                    <small class="text-danger">a few moments ago</small>
                                                </div>
                                            </div>
                                            <p class="font-small mt-1 mb-0">Added you to an event "Project stand-up" tomorrow at 12:30 AM.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item text-center fw-bold rounded-bottom py-3">
                                    <svg class="icon icon-xxs text-gray-400 me-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    View all
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown ms-lg-3">
                        <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="media d-flex align-items-center">
                                <img class="avatar rounded-circle" src="<?= base_url('assets/img/adminpic/') . $tbl_user['image']; ?>" alt="adminprofile">
                                <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                                    <span class="mb-0 font-small fw-bold text-gray-900"><?= $tbl_user['nama_lengkap'] ?></span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="fas fa-user-circle text-gray-400 me-2" fill="currentColor">
                                </i>
                                My Profile
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="fas fa-cog text-gray-400 me-2" fill="currentColor">
                                </i>
                                Settings
                            </a>
                            <div role="separator" class="dropdown-divider my-1"></div>
                            <a class="dropdown-item d-flex align-items-center" href="#" onclick="confirmLogout()">
                                <i class="fas fa-sign-out-alt text-danger me-2" fill="none" stroke="currentColor">
                                </i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>