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
    <?php
    if ($this->session->flashdata('pesan')) {
        echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i>';
        echo $this->session->flashdata('pesan');
        echo '</h5></div>';
    }
    ?>
    <div class="row">
        <div class="col-lg-6 mb-4">
            <!-- Simple Tables -->
            <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Simple Tables</h6>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#provinsi" id="#modalCenter">Add Provinsi</button>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Provinsi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($provinsi as $key => $value) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $value->nama_provinsi ?></td>
                                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editprovinsi<?= $value->id_provinsi ?>" id="#modalCenter">Edit</button>
                                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteprovinsi<?= $value->id_provinsi ?>" id="#modalCenter">Delete</button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>

        <div class="col-lg-6 mb-4">
            <!-- Data Kabupaten -->
            <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data Kabupaten</h6>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kabupaten" id="#modalCenter">Add Kabupaten</button>
                    <!-- <a href="<?= base_url('lokasi/add_kabupaten') ?>" class="btn btn-primary">Add kabupaten</a> -->
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Provinsi</th>
                                <th>Kabupaten</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($kabupaten as $key => $value) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $value->nama_provinsi ?></td>
                                    <td><?= $value->nama_kabupaten ?></td>
                                    <td>
                                        <!-- <a href="<?= base_url('lokasi/update_kabupaten/' . $value->id_kabupaten) ?>" class="btn btn-primary">kabupaten</a> -->
                                        <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editkabupaten<?= $value->id_kabupaten ?>" id="#modalCenter">Edit</button>
                                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deletekabupaten<?= $value->id_kabupaten ?>" id="#modalCenter">Delete</button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>

        <div class="col-lg-6 mb-4">
            <!-- Data kecamatan -->
            <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data kecamatan</h6>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kecamatan" id="#modalCenter">Add kecamatan</button>
                    <!-- <a href="<?= base_url('lokasi/add_kecamatan') ?>" class="btn btn-primary">Add kabupaten</a> -->
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <!-- <th>Provinsi</th> -->
                                <th>Kabupaten</th>
                                <th>Kecamatan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($kecamatan as $key => $value) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <!-- <td><?= $value->nama_provinsi ?></td> -->
                                    <td><?= $value->nama_kabupaten ?></td>
                                    <td><?= $value->nama_kecamatan ?></td>
                                    <td>
                                        <a href="<?= base_url('lokasi/update_kecamatan/' . $value->id_kecamatan) ?>" class="btn btn-sm btn-warning">edit</a>
                                        <!-- <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editkecamatan<?= $value->id_kecamatan ?>" id="#modalCenter">Edit</button> -->
                                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deletekecamatan<?= $value->id_kecamatan ?>" id="#modalCenter">Delete</button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>

        <div class="col-lg-6 mb-4">
            <!-- Data desa -->
            <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data desa</h6>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#desa" id="#modalCenter">Add desa</button>
                    <!-- <a href="<?= base_url('lokasi/add_desa') ?>" class="btn btn-primary">Add kabupaten</a> -->
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <!-- <th>Provinsi</th>
                                <th>Kabupaten</th> -->
                                <th>Kecamatan</th>
                                <th>Desa</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($desa as $key => $value) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <!-- <td><?= $value->nama_provinsi ?></td>
                                    <td><?= $value->nama_kabupaten ?></td> -->
                                    <td><?= $value->nama_kecamatan ?></td>
                                    <td><?= $value->nama_desa ?></td>
                                    <td>
                                        <a href="<?= base_url('lokasi/update_desa/' . $value->id_desa) ?>" class="btn btn-sm btn-warning">edit</a>
                                        <!-- <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editdesa<?= $value->id_desa ?>" id="#modalCenter">Edit</button> -->
                                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deletedesa<?= $value->id_desa ?>" id="#modalCenter">Delete</button>
                                    </td>
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


    <!-- Modal provinsi -->
    <div class="modal fade" id="provinsi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data Provinsi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open('lokasi/add') ?>
                    <input type="text" name="nama_provinsi" class="form-control" placeholder="Enter Provinsi" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
    <?php foreach ($provinsi as $key => $value) { ?>
        <div class="modal fade" id="editprovinsi<?= $value->id_provinsi ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data Provinsi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php echo form_open('lokasi/update/' . $value->id_provinsi) ?>
                        <input type="text" name="nama_provinsi" value="<?= $value->nama_provinsi ?>" class="form-control" placeholder="Enter Provinsi" required>
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
    <?php foreach ($provinsi as $key => $value) { ?>
        <div class="modal fade" id="deleteprovinsi<?= $value->id_provinsi ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data Provinsi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah anda yakin Delet Provinsi ini?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                        <a href="<?= base_url('lokasi/delete/' . $value->id_provinsi) ?>" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <!-- and modal provinsi -->

    <!-- Modal kabupaten -->
    <div class="modal fade" id="kabupaten" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data Kabupaten</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open('lokasi/add_kabupaten') ?>
                    <div class="form-group">
                        <label for="">Nama Provinsi</label>
                        <select class="form-control" name="id_provinsi" id="" required>
                            <option value="">---Pilih Lokasi Provinsi---</option>
                            <?php foreach ($provinsi as $key => $value) { ?>
                                <option value="<?= $value->id_provinsi ?>" name="id_provinsi" class="form-control"><?= $value->nama_provinsi ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Kabupaten</label>
                        <input type="text" name="nama_kabupaten" class="form-control" placeholder="Enter kabupaten" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
    <?php foreach ($kabupaten as $key => $value) { ?>
        <div class="modal fade" id="editkabupaten<?= $value->id_kabupaten ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data kabupaten</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php echo form_open_multipart('lokasi/update_kabupaten/' . $value->id_kabupaten) ?>
                        <div class="form-group">
                            <label for="">Nama Provinsi</label>
                            <select class="form-control" name="id_provinsi" id="" required>
                                <option value="<?= $value->id_provinsi ?>"><?= $value->nama_provinsi ?></option>
                                <?php foreach ($provinsi as $key => $value) { ?>
                                    <option value="<?= $value->id_provinsi ?>" name="id_provinsi" value="<?= $value->id_provinsi ?>" class="form-control"><?= $value->nama_provinsi ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Kabupaten</label>
                            <input type="text" name="nama_kabupaten" class="form-control" placeholder="Enter kabupaten" required>
                        </div>
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
    <?php foreach ($kabupaten as $key => $value) { ?>
        <div class="modal fade" id="deletekabupaten<?= $value->id_kabupaten ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data kabupaten</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah anda yakin Delet kabupaten ini?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                        <a href="<?= base_url('lokasi/delete_kabupaten/' . $value->id_kabupaten) ?>" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <!-- Modal kecamatan -->
    <div class="modal fade" id="kecamatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data kecamatan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open('lokasi/add_kecamatan') ?>
                    <!-- <div class="form-group">
                        <label for="">Nama Provinsi</label>
                        <select class="form-control" name="id_provinsi" id="" required>
                            <option value="">---Pilih Lokasi Provinsi---</option>
                            <?php foreach ($provinsi as $key => $value) { ?>
                                <option value="<?= $value->id_provinsi ?>" name="id_provinsi" class="form-control"><?= $value->nama_provinsi ?></option>
                            <?php } ?>
                        </select>
                    </div> -->
                    <div class="form-group">
                        <label for="">Nama Kabupaten</label>
                        <select class="form-control" name="id_kabupaten" id="" required>
                            <option value="">---Pilih Lokasi Kabupaten---</option>
                            <?php foreach ($kabupaten as $key => $value) { ?>
                                <option value="<?= $value->id_kabupaten ?>" name="id_kabupaten" class="form-control"><?= $value->nama_kabupaten ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nama kecamatan</label>
                        <input type="text" name="nama_kecamatan" class="form-control" placeholder="Enter kecamatan" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
    <?php foreach ($kecamatan as $key => $value) { ?>
        <div class="modal fade" id="editkecamatan<?= $value->id_kecamatan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data kecamatan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php echo form_open_multipart('lokasi/update_kecamatan/' . $value->id_kecamatan) ?>
                        <div class="form-group">
                            <label for="">Nama Provinsi</label>
                            <select class="form-control" name="id_provinsi" id="" required>
                                <option value="<?= $value->id_provinsi ?>"><?= $value->nama_provinsi ?></option>
                                <?php foreach ($provinsi as $key => $value) { ?>
                                    <option value="<?= $value->id_provinsi ?>" name="id_provinsi" value="<?= $value->id_provinsi ?>" class="form-control"><?= $value->nama_provinsi ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Kabupaten</label>
                            <select class="form-control" name="id_kabupaten" id="" required>
                                <option value="<?= $value->id_kabupaten ?>"><?= $value->nama_kabupaten ?></option>
                                <?php foreach ($kabupaten as $key => $value) { ?>
                                    <option value="<?= $value->id_kabupaten ?>" name="id_kabupaten" value="<?= $value->id_kabupaten ?>" class="form-control"><?= $value->nama_kabupaten ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama kecamatan</label>
                            <input type="text" name="nama_kecamatan" class="form-control" placeholder="Enter kecamatan" required>
                        </div>
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
    <?php foreach ($kecamatan as $key => $value) { ?>
        <div class="modal fade" id="deletekecamatan<?= $value->id_kecamatan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data kecamatan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah anda yakin Delet kecamatan ini?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                        <a href="<?= base_url('lokasi/delete_kecamatan/' . $value->id_kecamatan) ?>" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <!-- Modal desa -->
    <div class="modal fade" id="desa" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data desa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open('lokasi/add_desa') ?>
                    <div class="form-group">
                        <label for="">Nama Kecamatan</label>
                        <select class="form-control" name="id_kecamatan" id="" required>
                            <option value="">---Pilih Lokasi kecamatan---</option>
                            <?php foreach ($kecamatan as $key => $value) { ?>
                                <option value="<?= $value->id_kecamatan ?>" name="id_kecamatan" class="form-control"><?= $value->nama_kecamatan ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nama desa</label>
                        <input type="text" name="nama_desa" class="form-control" placeholder="Enter desa" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
    <?php foreach ($desa as $key => $value) { ?>
        <div class="modal fade" id="editdesa<?= $value->id_desa ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data desa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php echo form_open_multipart('lokasi/update_desa/' . $value->id_desa) ?>
                        <div class="form-group">
                            <label for="">Nama kecamatan</label>
                            <select class="form-control" name="id_kecamatan" id="">
                                <option value="<?= $value->id_kecamatan ?>"><?= $value->nama_kecamatan ?></option>
                                <?php foreach ($kecamatan as $key => $value) { ?>
                                    <option value="<?= $value->id_kecamatan ?>" name="id_kecamatan" value="<?= $value->id_kecamatan ?>" class="form-control"><?= $value->nama_kecamatan ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama desa</label>
                            <input type="text" name="nama_desa" class="form-control" placeholder="Enter desa" required>
                        </div>
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
    <?php foreach ($desa as $key => $value) { ?>
        <div class="modal fade" id="deletedesa<?= $value->id_desa ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Edit Data desa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah anda yakin Delet desa ini?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                        <a href="<?= base_url('lokasi/delete_desa/' . $value->id_desa) ?>" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>