<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?= base_url() ?>template/img/logo/logo.png" rel="icon">
    <title>RuangAdmin - Login</title>
    <link href="<?= base_url() ?>template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>template/css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
    <!-- Login Content -->
    <div class="container-login">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-12 col-md-9">
                <div class="card shadow-sm my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="login-form">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                    </div>
                                    <?php
                                    echo validation_errors('<div class="alert alert-warning alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h5><i class="icon fas fa-exclamation-triangle"></i> Coba Lagi</h5>', '</div>');

                                    if (
                                        $this->session->flashdata('error')
                                    ) {
                                        echo '<div class="alert alert-danger alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <h5><i class="icon fa fa-ban"></i> Gagal</h5>';
                                        echo $this->session->flashdata('error');
                                        echo '</div>';
                                    }

                                    if ($this->session->flashdata('pesan')) {
                                        echo '<div class="alert alert-success alert-dismissible">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                <h5><i class="icon fa fa-check"></i> Sukses</h5>';
                                        echo $this->session->flashdata('pesan');
                                        echo '</div>';
                                    }

                                    echo form_open('auth/login_user')
                                    ?>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="username" id="exampleInputEmail" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <!-- <a href="index.html" class="btn btn-primary btn-block">Login</a> -->
                                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                                    </div>
                                    <hr>
                                    <?php echo form_close() ?>
                                    <hr>
                                    <div class="text-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Content -->
    <script src="<?= base_url() ?>template/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>template/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?= base_url() ?>template/js/ruang-admin.min.js"></script>
</body>

</html>