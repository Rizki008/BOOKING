<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Barang</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active" aria-current="page">Data Barang</li>
        </ol>
    </div>

    <!-- Row -->
    <div class="row">
        <!-- Data Barang -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#add" id="#myBtn"><i class="icon fa fa-plus">Add</i></button>
                </div>
                <?php
                if ($this->session->flashdata('pesan')) {
                    echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i>';
                    echo $this->session->flashdata('pesan');
                    echo '</h5></div>';
                }
                ?>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush" id="dataTable">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($produk as $key => $value) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $value->nama_produk ?></td>
                                    <td>
                                        <button class="btn btn-warning" type="button" data-toggle="modal" data-target="#edit<?= $value->id_produk ?>">Edit</button>
                                        <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#delete<?= $value->id_produk ?>">Delet</button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal add -->
    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php echo form_open('produk/add') ?>
                <div class="modal-body">
                    <Label>Nama Barang</Label>
                    <input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>

    <!-- Modal edit -->
    <?php foreach ($produk as $key => $value) { ?>
        <div class="modal fade" id="edit<?= $value->id_produk ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php echo form_open('produk/update/' . $value->id_produk) ?>
                    <div class="modal-body">
                        <Label>Nama Barang</Label>
                        <input type="text" name="nama_produk" value="<?= $value->nama_produk ?>" class="form-control" placeholder="Nama Produk" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    <?php } ?>

    <!-- Modal delet -->
    <?php foreach ($produk as $key => $value) { ?>
        <div class="modal fade" id="delete<?= $value->id_produk ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah Anda yakin Akan Hapus Barang Ini?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                        <a href="<?= base_url('produk/delete/' . $value->id_produk) ?>" class="btn btn-primary">Delete</a>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    <?php } ?>