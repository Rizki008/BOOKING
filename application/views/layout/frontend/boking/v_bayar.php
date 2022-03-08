<!-- about -->
<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Proses Pembayaran</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="card mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Total Harga</h6>
                        </div>
                        <div class="card-body">
                            <h1>Silahkan Bayar Ke No Rekening Di Bawah ini Sebesar : </h1>
                            <p>78456-21346-21-12</p>
                        </div>
                    </div>
                    <!-- Form Basic -->
                    <div class="card mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Form Pembayaran</h6>
                        </div>
                        <div class="card-body">
                            <?php echo form_open_multipart('pesanan_saya/bayar/' . $bayar->id_bayar) ?>
                            <div class="form-group">
                                <label>Atas Nama</label>
                                <input class="form-control" name="atas_nama" placeholder="Atas Nama" required>
                            </div>
                            <div class="form-group">
                                <label>Nama Bank</label>
                                <input class="form-control" name="nama_bank" placeholder="Nama Bank" required>
                            </div>
                            <div class="form-group">
                                <label>No Rekening</label>
                                <input class="form-control" name="no_rek" placeholder="No Rekening" required>
                            </div>
                            <div class="form-group">
                                <label>Jumlah Bayar</label>
                                <input class="form-control" name="jumlah_bayar" placeholder="Jumlah Bayar" required>
                            </div>
                            <div class="form-group">
                                <label>Bukti Bayar</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="bukti_bayar">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <?php echo form_close() ?>
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