<!-- about -->
<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Boking Servis</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 offset-md-1">
                    <div class="about_img">
                        <div class="about_box">
                            <form id="request" class="main_form" action="<?= base_url('Booking_pelanggan/booking') ?>" method="POST">
                                <?php $no_boking = date('Ymd') . strtoupper(random_string('alnum', 8)); ?>
                                <div class="col-md-12 ">
                                    <input class="contactus" placeholder="Nama Pelanggan" type="type" name="id_pelanggan" value="<?= $this->session->userdata('nama'); ?>" disabled>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="contactus" placeholder="Nama Provinsi" type="text" name="nama_provinsi" value="<?= $boking->nama_provinsi ?>" disabled>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="contactus" placeholder="Nama kabupaten" type="text" name="nama_kabupaten" value="<?= $boking->nama_kabupaten ?>" disabled>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="contactus" placeholder="Nama kecamatan" type="text" name="nama_kecamatan" value="<?= $boking->nama_kecamatan ?>" disabled>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="contactus" placeholder="Nama desa" type="text" value="<?= $boking->nama_desa ?>" readonly>
                                        <input type="hidden" value="<?= $boking->id_desa ?>" name="id_desa">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="contactus" placeholder="Alamat Lengkap" type="text" name="alamat" value="<?= $this->session->userdata('alamat'); ?>" disabled>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="contactus" placeholder="Nomor Telpon" type="text" name="no_tlpn" value="<?= $this->session->userdata('no_tlpn'); ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <select name="nama_produk" class="form-control" id="" required>
                                        <option value="" class="form-control">---Pilih Barang Servis---</option>
                                        <?php foreach ($produk as $key => $value) { ?>
                                            <option value="<?= $value->nama_produk ?>" name="nama_produk"><?= $value->nama_produk ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <textarea class="textarea" placeholder="Deskripsi Kerusakan" name="deskripsi_kerusakan"></textarea>
                                </div>
                                <!--simpan transaksi-->
                                <input name="no_boking" value="<?= $no_boking ?>" hidden>
                                <button type="submit" class="read_more">Boking</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end about -->
<div class="about">
    <div class="container">
        <div class="row">
        </div>
    </div>
</div>