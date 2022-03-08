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

            echo form_open('pelanggan/register');

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
            <h3>Registration Form</h3>
            <div class="form-group">
                <div class="form-wrapper">
                    <label>Nama Lengkap:</label>
                    <div class="form-holder">
                        <i class="zmdi zmdi-account-o"></i>
                        <input type="text" name="nama" value="<?= set_value('nama') ?>" class="form-control">
                    </div>
                </div>
                <div class="form-wrapper">
                    <label>No Telpon:</label>
                    <div class="form-holder">
                        <i class="zmdi zmdi-phone"></i>
                        <input type="text" name="no_tlpn" value="<?= set_value('no_tlpn') ?>" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-wrapper">
                    <label>Provinsi:</label>
                    <select name="provinsi" class="form-control" id="provinsi" required>
                        <option value="" class="form-control">-pilih Provinsi-</option>
                        <?php foreach ($provinsi as $key => $value) { ?>
                            <option value="<?= $value->id_provinsi ?>" data-provinsi="<?= $value->nama_provinsi ?>" name="nama_provinsi"><?= $value->nama_provinsi ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-wrapper">
                    <label>Kabupaten:</label>
                    <select name="kabupaten" class="form-control" id="kabupaten" required>
                    </select>
                </div>
                <div class="form-wrapper">
                    <label>Kecamatan:</label>
                    <select name="kecamatan" class="form-control" id="kecamatan" required>

                    </select>
                </div>
                <div class="form-wrapper">
                    <label>desa:</label>
                    <select name="desa" class="form-control" id="desa" required>

                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="form-wrapper">
                    <label>Alamat Lengkap:</label>
                    <div class="form-holder ">
                        <i class="zmdi zmdi-pin"></i>
                        <input type="text" name="alamat" value="<?= set_value('alamat') ?>" class="form-control">
                    </div>
                </div>
                <div class="form-wrapper">
                    <label>Email:</label>
                    <div class="form-holder">
                        <i style="font-style: normal; font-size: 15px;">@</i>
                        <input type="email" name="email" value="<?= set_value('email') ?>" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-wrapper">
                    <label>Password:</label>
                    <div class="form-holder">
                        <i class="zmdi zmdi-lock-outline"></i>
                        <input type="password" name="password" value="<?= set_value('password') ?>" class="form-control" placeholder="********">
                    </div>
                </div>
                <div class="form-wrapper">
                    <label>Ulangi Password:</label>
                    <div class="form-holder">
                        <i class="zmdi zmdi-lock-outline"></i>
                        <input type="password" name="ulangi_password" value="<?= set_value('ulangi_password') ?>" class="form-control" placeholder="********">
                    </div>
                </div>
            </div>
            <!-- <input name="provinsi" type="text"> -->
            <div class="form-end">
                <div class="button-holder">
                </div>
                <div class="button-holder">
                    <button type="submit">Register Now</button>
                </div>

            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
    <script type="text/javascript" src="<?= base_url('assets/jquery-1.11.3.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/bootstrap-5.1.3-dist/js/bootstrap.js') ?>"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#provinsi").on('change', (function() {
                var id_provinsi = $(this).val();
                $.ajax({
                    method: "POST",
                    url: "<?php echo base_url('Pelanggan/kabupaten') ?>",
                    data: 'id_provinsi=' + id_provinsi,
                    async: true,
                    type: 'get',
                    dataType: 'json',
                    success: function(data) {
                        $('#kabupaten').html("");
                        console.log(data);
                        $('#kabupaten').append('<option>---Pilih Kabupaten---</option>')
                        for (var i = 0; i < data.length; i++) {
                            $('#kabupaten').append('<option value=' + data[i].id_kabupaten + '>' + data[i].nama_kabupaten + '</option>');
                        }
                    }
                });
            }));
            $("#kabupaten").on('change', (function() {
                var id_kabupaten = $(this).val();
                $.ajax({
                    method: "POST",
                    url: "<?php echo base_url('Pelanggan/kecamatan') ?>",
                    data: 'id_kabupaten=' + id_kabupaten,
                    async: true,
                    type: 'get',
                    dataType: 'json',
                    success: function(data_kecamatan) {
                        console.log(data_kecamatan);
                        $('#kecamatan').append('<option>---Pilih Kecamatan---</option>')
                        for (var i = 0; i < data_kecamatan.length; i++) {
                            $('#kecamatan').append('<option value=' + data_kecamatan[i].id_kecamatan + '>' + data_kecamatan[i].nama_kecamatan + '</option>');
                        }
                    }
                });

            }));
            $("#kecamatan").on('change', (function() {
                var id_kecamatan = $(this).val();
                $.ajax({
                    method: "POST",
                    url: "<?php echo base_url('Pelanggan/desa') ?>",
                    data: 'id_kecamatan=' + id_kecamatan,
                    async: true,
                    type: 'get',
                    dataType: 'json',
                    success: function(data_desa) {
                        console.log(data_desa);
                        $('#desa').append('<option>---Pilih Desa---</option>')
                        for (var i = 0; i < data_desa.length; i++) {
                            $('#desa').append('<option value=' + data_desa[i].id_desa + '>' + data_desa[i].nama_desa + '</option>');
                        }
                    }
                });
            }));
        });
    </script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>