<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">DataTables</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active" aria-current="page">DataTables</li>
        </ol>
    </div>

    <!-- Row -->
    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush" id="dataTable">
                        <thead class="thead-light">
                            <tr>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No Telpon</th>
                                <th>Nama Barang</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($boking_detail as $key => $value) { ?>
                                <tr>
                                    <td><?= $value->nama ?></td>
                                    <td><?= $value->nama_tempat ?></td>
                                    <td><?= $value->no_tlp ?></td>
                                    <td><?= $value->nama_barang ?></td>
                                    <td>
                                        <?php if ($value->status == 0) { ?>
                                            <a href="<?= base_url('kurir/proses/' . $value->id_boking) ?>" class="btn btn-primary">Proses</a>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--Row-->