<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>RegistrationForm_v3 by Colorlib</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="<?= base_url() ?>template3/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>template3/css/style.css">
</head>

<body>

    <div class="wrapper" style="background-image: url('<?= base_url() ?>template3/images/bg-registration-form-3.jpg');">
        <div class="inner">
            <?php

            echo form_open('pelanggan/login');

            echo validation_errors('<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-exclamation-triangle"></i> Coba Lagi</h5>', '</div>');

            if (
                $this->session->flashdata('pesan')
            ) {
                echo '<div class="alert alert-success alert-dismissible"> 
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i>Sukses</h5>';
                echo
                $this->session->flashdata('pesan');
                echo '</div>';
            }
            ?>
            <h3>Login Form</h3>
            <div class="form-group">
                <div class="form-wrapper">
                    <label for="">Email:</label>
                    <div class="form-holder">
                        <i style="font-style: normal; font-size: 15px;">@</i>
                        <input type="text" name="email" value="<?= set_value('email') ?>" class="form-control">
                    </div>
                </div>
                <div class="form-wrapper">
                    <label for="">Password:</label>
                    <div class="form-holder">
                        <i class="zmdi zmdi-lock-outline"></i>
                        <input type="password" name="password" value="<?= set_value('password') ?>" class="form-control" placeholder="********">
                    </div>
                </div>
            </div>
            <div class="form-end">
                <div class="button-holder">
                    <a href="<?= base_url('pelanggan/register') ?>">Register Now</a>
                </div>
                <div class="button-holder">
                    <button>Login Now</button>
                </div>
            </div>
            <?php echo form_close() ?>
        </div>
    </div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>