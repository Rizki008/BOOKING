<?php
$daftar_chat = $this->m_pesan->daftar_chat();
$jml_chat = $this->m_pesan->jml_chatting();
$total_boking = $this->m_admin->total_boking();
?>
<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin') ?>">
        <div class="sidebar-brand-icon">
            <!-- <img src="<?= base_url() ?>template/img/logo/logo2.png"> -->
        </div>
        <div class="sidebar-brand-text mx-3">RuangAdmin</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Data Master Boking
    </div>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('lokasi') ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            Data Lokasi Boking
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('produk') ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            Data Barang Servis
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/boking_masuk') ?>">
            <i class="fas fa-fw fa-chart-area"></i>Data Boking Masuk
            <span class="badge badge-warning badge-counter">[<?= $total_boking ?>]</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Data Laporan
    </div>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('laporan') ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            Laporan
        </a>
    </li>
    <hr class="sidebar-divider">
</ul>
<!-- Sidebar -->
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
            <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                        <form class="navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?" aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <!-- <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bell fa-fw"></i>
                        <span class="badge badge-danger badge-counter">3+</span>
                    </a>
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header">
                            Alerts Center
                        </h6>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-primary">
                                    <i class="fas fa-file-alt text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500">December 12, 2019</div>
                                <span class="font-weight-bold">A new monthly report is ready to download!</span>
                            </div>
                        </a>
                        <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                    </div>
                </li> -->
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-envelope fa-fw"></i>
                        <span class="badge badge-warning badge-counter"><?= $jml_chat ?></span>
                    </a>
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                        <h6 class="dropdown-header">
                            Message Center
                        </h6>
                        <?php
                        foreach ($daftar_chat as $key => $value) {
                        ?>
                            <a class="dropdown-item d-flex align-items-center" href="<?= base_url('pesan/chatting/' . $value->id_pelanggan) ?>">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="<?= base_url() ?>template/img/man.png" style="max-width: 60px" alt="">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate"><?= $value->isi_pelanggan ?></div>
                                    <div class="small text-gray-500"><?= $value->nama ?> · <?= $value->time_chatting ?></div>
                                </div>
                            </a>
                        <?php } ?>
                        <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                    </div>
                </li>
                <div class="topbar-divider d-none d-sm-block"></div>
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="img-profile rounded-circle" src="<?= base_url() ?>template/img/boy.png" style="max-width: 60px">
                        <span class="ml-2 d-none d-lg-inline text-white small">Admin</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url('auth/logout_user') ?>" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- Topbar -->