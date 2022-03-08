<!-- about -->
<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Akun Profil</h2>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-primary card-outline">
                            <?php foreach ($profil as $key => $value) { ?>
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle" src="<?= base_url() ?>template2/images/user8-128x128.jpg" alt="User profile picture">
                                    </div>
                                    <h3 class="profile-username text-center"><?= $value->nama ?></h3>
                                    <p class="text-muted text-center">No Telpon : <?= $value->no_tlpn ?></p>
                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Jumlah Servis</b> <a class="float-right"><?= $total_boking ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Jumlah Transaksi</b> <a class="float-right"><?= $total_transaksi ?></a>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                    <?php } ?>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="active tab-pane" id="activity">
                                    </div>
                                </div>
                                <div class="tab-pane" id="timeline">
                                    <div class="timeline timeline-inverse">
                                        <div>
                                            <i class="fa fa-user bg-info"></i>
                                            <div class="timeline-item">
                                                <h3 class="timeline-header"><a href="#"><?= $value->nama ?></a></h3>
                                                <div class="timeline-body">
                                                    <form class="form-horizontal">
                                                        <div class="form-group row">
                                                            <label for="inputName" class="col-sm-2 col-form-label">Prvinsi</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" value="<?= $value->nama_provinsi ?>" class="form-control" id="inputName" placeholder="Name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputName" class="col-sm-2 col-form-label">Kabupaten</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" value="<?= $value->nama_kabupaten ?>" class="form-control" id="inputName" placeholder="Name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputName" class="col-sm-2 col-form-label">Kecamatan</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" value="<?= $value->nama_kecamatan ?>" class="form-control" id="inputName" placeholder="Name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputName" class="col-sm-2 col-form-label">Desa</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" value="<?= $value->nama_desa ?>" class="form-control" id="inputName" placeholder="Name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputName" class="col-sm-2 col-form-label">Alamat Lengkap</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" value="<?= $value->alamat ?>" class="form-control" id="inputName" placeholder="Name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" name="email" value="<?= $value->email ?>" class="form-control" id="inputEmail" placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputName2" class="col-sm-2 col-form-label">Password</label>
                                                            <div class="col-sm-10">
                                                                <input type="password" name="password" value="<?= $value->password ?>" class="form-control" id="inputName2" placeholder="Name">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="offset-sm-2 col-sm-10">
                                                                <!-- <button type="submit" class="btn btn-danger">Edit</button> -->
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<div class="form-group row">
    <div class="offset-sm-2 col-sm-10">
        <div class="checkbox">
            <label>

            </label>
        </div>
    </div>
</div>