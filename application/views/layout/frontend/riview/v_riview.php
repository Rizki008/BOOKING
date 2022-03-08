<!-- about -->
<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Riviews</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="about_img">
                        <div class="about_box">
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>No Boking</th>
                                                <th>Atas Nama</th>
                                                <th>Nama Barang</th>
                                                <th>Deskripsi Kerusakan</th>
                                                <th>Harga</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($pesanan_detail as $key => $value) { ?>
                                                <?php echo form_open_multipart('pesanan_saya/insert_riview') ?>
                                                <tr>
                                                    <td><a href="#"><?= $value->no_boking ?></a></td>
                                                    <td><?= $value->nama ?></td>
                                                    <td><?= $value->nama_barang ?></td>
                                                    <td><?= $value->deskripsi_kerusakan ?></td>
                                                    <td><?= $value->total_bayar ?></td>

                                                </tr>
                                                <input name="id_bayar" class="form-control" cols="30" rows="10" placeholder="isi Produk" value="<?= $value->id_bayar ?>" required hidden></input>
                                                <td><input name="isi" class="form-control" cols="30" rows="10" placeholder="isi Riview" required></input></td>
                                                <td><button type="submit" class="btn btn-primary btn-block">Simpan</button></td>
                                                <?php echo form_close() ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <a href="<?= base_url('pesanan_saya') ?>" class="btn btn-primary btn-xs btn-flat btn-block">Kembali</a>
                                </div>
                                <!-- /.col -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #/ container -->
            </div>
        </div>
    </div>
</div>