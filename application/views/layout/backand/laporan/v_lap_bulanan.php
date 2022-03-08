<div class="col-12">
    <!-- Main content -->
    <div class="invoice p-3 mb-3">
        <!-- title row -->
        <div class="row">
            <div class="col-12">
                <h4>
                    <i class="fas fa-shopping-cart"></i> <?= $title ?>
                    <small class="float-right">Bulan: <?= $bulan ?> / Tahun: <?= $tahun ?></small>
                </h4>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
        </div>
        <!-- /.row -->

        <!-- Table row -->
        <div class="row">
            <div class="col-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Boking</th>
                            <th>Nama Barang</th>
                            <th>Tanggal Boking</th>
                            <th>Deskripsi Kerusakan</th>
                            <th>Jumlah Bayar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        $jumlah_bayar = 0;
                        foreach ($laporan as $key => $value) {
                            $jumlah_bayar = $jumlah_bayar + $value->jumlah_bayar;
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $value->no_boking ?></td>
                                <td><?= $value->nama_barang ?></td>
                                <td><?= $value->tgl_boking ?></td>
                                <td><?= $value->deskripsi_kerusakan ?></td>
                                <td>Rp.<?= number_format($value->jumlah_bayar, 0) ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <h3>Grand Total : Rp. <?= number_format($jumlah_bayar, 0) ?> </h3>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- this row will not appear when printing -->
        <script type="text/javascript">
            window.print();
        </script>
    </div>
    <!-- /.invoice -->