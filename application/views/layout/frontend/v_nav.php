<?php
$status_kurir = $this->m_home->status_kurir();
$status_teknisi = $this->m_home->status_teknisi();
$status_bayar = $this->m_home->status_bayar();
?>
<!-- header -->
<header>
    <!-- header inner -->
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <a href="index.html"><img src="<?= base_url() ?>template2/images/logo.png" alt="#" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?= base_url() ?>"> Home </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('booking_pelanggan') ?>">Booking</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <?php if (
                                        $this->session->userdata('email') == ""
                                    ) { ?>
                                        <a href="#" class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle padd_right" aria-hidden="true"></i>Akun</a>
                                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                                            <a class="dropdown-item" href="<?= base_url('pelanggan/login') ?>">Login/Register</a>
                                            <!--<a class="dropdown-item" href="<?= base_url('pelanggan/register') ?>">Register</a>-->
                                        </div>
                                    <?php } else { ?>
                                        <a href="#" class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle padd_right" aria-hidden="true"></i><?= $this->session->userdata('nama'); ?></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                                            <a class="dropdown-item" href="<?= base_url('pelanggan/akun') ?>">Profil</a>
                                            <a class="dropdown-item" href="<?= base_url('pesanan_saya') ?>">Data Boking
                                                <?php if ($status_kurir) { ?>
                                                    <span class="badge badge-danger navbar-badge">[<?= $status_kurir ?>]</span>
                                                <?php } else if ($status_teknisi) { ?>
                                                    <span class="badge badge-primary navbar-badge">[<?= $status_teknisi ?>]</span>
                                                <?php } else if ($status_bayar) { ?>
                                                    <span class="badge badge-warning navbar-badge">[<?= $status_bayar ?>]</span>
                                                <?php } ?>
                                            </a>
                                            <a class="dropdown-item" href="<?= base_url('pesanan') ?>">Chatting</a>
                                            <a class="dropdown-item" href="<?= base_url('pelanggan/logout') ?>">Log Out</a>
                                        </div>
                                    <?php } ?>
                                </li>
                                <li class="nav-item d_none">
                                    <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header inner -->
<!-- end header -->
<!-- banner -->
<section class="banner_main">
    <div id="banner1" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#banner1" data-slide-to="0" class="active"></li>
            <li data-target="#banner1" data-slide-to="1"></li>
            <li data-target="#banner1" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container-fluid">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-bg">
                                    <h1>Selamat Datang</h1>
                                    <span>Di Toko Servis Kami</span>
                                    <p>Kami Melayani Servis Alat Rumah Tangga</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text_img">
                                    <figure><img src="<?= base_url() ?>template2/images/car.png" alt="#" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container-fluid">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-bg">
                                    <h1>Selamat Datang</h1>
                                    <span>Di Toko Servis Kami</span>
                                    <p>Kami Melayani Servis Alat Rumah Tangga</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text_img">
                                    <figure><img src="<?= base_url() ?>template2/images/car.png" alt="#" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container-fluid">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-bg">
                                    <h1>Selamat Datang</h1>
                                    <span>Di Toko Servis Kami</span>
                                    <p>Kami Melayani Servis Alat Rumah Tangga</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text_img">
                                    <figure><img src="<?= base_url() ?>template2/images/car.png" alt="#" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </a>
        <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </a>
    </div>
</section>
<!-- end banner -->