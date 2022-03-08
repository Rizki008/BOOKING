<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Basics</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Forms</li>
            <li class="breadcrumb-item active" aria-current="page">Form Basics</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <!-- Form Basic -->
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Form Basic</h6>
                </div>
                <div class="card-body">
                    <?php echo form_open_multipart('lokasi/update_kecamatan/' . $kecamatan->id_kecamatan) ?>
                    <!-- <div class="form-group">
                        <label for="">Nama Provinsi</label>
                        <select class="form-control" name="id_provinsi" id="" required>
                            <option value="<?= $kecamatan->id_provinsi ?>"><?= $kecamatan->nama_provinsi ?></option>
                            <?php foreach ($provinsi as $key => $value) { ?>
                                <option value="<?= $value->id_provinsi ?>" name="id_provinsi" class="form-control"><?= $value->nama_provinsi ?></option>
                            <?php } ?>
                        </select>
                    </div> -->
                    <div class="form-group">
                        <label for="">Nama Kabupaten</label>
                        <select class="form-control" name="id_kabupaten" id="" required>
                            <option value="<?= $kecamatan->id_kabupaten ?>"><?= $kecamatan->nama_kabupaten ?></option>
                            <?php foreach ($kabupaten as $key => $value) { ?>
                                <option value="<?= $value->id_kabupaten ?>" name="id_kabupaten" class="form-control"><?= $value->nama_kabupaten ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Kecamatan</label>
                        <input type="text" name="nama_kecamatan" value="<?= $value->nama_kecamatan ?>" class="form-control" placeholder="Enter kecamatan" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="<?= base_url('lokasi') ?>" class="btn btn-warning">Kembali</a>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>