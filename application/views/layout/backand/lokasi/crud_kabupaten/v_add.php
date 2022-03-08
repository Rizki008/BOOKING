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
                    <?php echo form_open_multipart('lokasi/update_kabupaten/' . $kabupaten->id_kabupaten) ?>
                    <div class="form-group">
                        <select class="form-control" name="id_provinsi" id="" required>
                            <option value="<?= $kabupaten->id_provinsi ?>"><?= $kabupaten->nama_provinsi ?></option>
                            <?php foreach ($provinsi as $key => $value) { ?>
                                <option value="<?= $value->id_provinsi ?>" name="id_provinsi" class="form-control"><?= $value->nama_provinsi ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Kabupaten</label>
                        <input type="text" name="nama_kabupaten" value="<?= $value->nama_kabupaten ?>" class="form-control" placeholder="Enter kabupaten" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="<?= base_url('lokasi') ?>" class="btn btn-warning">Kembali</a>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>