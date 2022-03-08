<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Simple Tables</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active" aria-current="page">Simple Tables</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Simple Tables -->
            <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Simple Tables</h6>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>No Boking</th>
                                <th>Nama Pelanggan</th>
                                <th>No Telpon</th>
                                <th>Nama Barang</th>
                                <th>Tanggal Boking</th>
                                <th>Deskripsi Kerusakan</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pembayaran as $key => $value) { ?>
                                <tr>
                                    <td><a href="#"><?= $value->no_boking ?></a></td>
                                    <td><?= $value->nama ?></td>
                                    <td><?= $value->no_tlpn ?></td>
                                    <td><?= $value->nama_produk ?></td>
                                    <td><?= $value->tgl_boking ?></td>
                                    <td><?= $value->deskripsi_kerusakan ?></td>
                                    <td>
                                        <?php if ($value->status == 0) { ?>
                                            <span class="badge badge-danger">Pending</span>
                                        <?php } else if ($value->status == 1) { ?>
                                            <span class="badge badge-success">pengambilan</span>
                                        <?php } else if ($value->status == 2) { ?>
                                            <span class="badge badge-info">Proses Pembayaran</span>
                                        <?php } else if ($value->status == 3) { ?>
                                            <span class="badge badge-warning">Konfirmasi Pembayaran</span>
                                        <?php } else if ($value->status == 4) { ?>
                                            <span class="badge badge-success">Pembayaran Telah Dikonfirmasi</span>
                                        <?php } else if ($value->status == 5) { ?>
                                            <span class="badge badge-danger">Dibatalkan Pelanggan!!!</span>
                                        <?php } ?>
                                    </td>
                                    <td><?php if ($value->status == 1) { ?>
                                            <a href="<?= base_url('teknisi/proses/' . $value->id_bayar) ?>" class="btn btn-sm btn-primary">Cek barang</a>
                                    </td>
                                <?php } ?>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
    </div>
    <!--Row-->