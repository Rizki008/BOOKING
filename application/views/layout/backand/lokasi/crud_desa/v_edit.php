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

                    <?php
                    //notifikasi form kosong
                    echo validation_errors('<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-exclamation-triangle"></i>', '</h5></div>');

                    //notifikasi gagal upload gambar
                    if (isset($error_upload)) {
                        echo '<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-exclamation-triangle"></i>' . $error_upload . '</h5></div>';
                    }
                    echo form_open_multipart('lokasi/update_desa/' . $desa->id_desa) ?>
                    <div class="form-group">
                        <label for="">Nama Kecamatan</label>
                        <select class="form-control" name="id_kecamatan" id="" required>
                            <option value="<?= $desa->id_kecamatan ?>"><?= $desa->nama_kecamatan ?></option>
                            <?php foreach ($kecamatan as $key => $value) { ?>
                                <option value="<?= $value->id_kecamatan ?>" name="id_kecamatan" class="form-control"><?= $value->nama_kecamatan ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Desa</label>
                        <input type="text" name="nama_desa" value="<?= $value->nama_desa ?>" class="form-control" placeholder="Enter desa" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="<?= base_url('lokasi') ?>" class="btn btn-warning">Kembali</a>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>