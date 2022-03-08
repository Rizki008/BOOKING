<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Chatting</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Chatting</li>
            <li class="breadcrumb-item active" aria-current="page">Chatting</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <!-- Modal basic -->
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Chatting</h6>
                </div>
                <div class="card-body">

                    <?php
                    foreach ($chatting as $key => $value) {
                        $id_pelanggan = $value->id_pelanggan;
                        if ($value->isi_pelanggan != '0') {
                    ?>
                            <div class="d-sm-flex justify-content-between mb-2">
                                <h5 class="mb-sm-0"><?= $value->nama ?> <small class="text-muted ml-3"><?= $value->time_chatting ?></small></h5>
                                <div class="media-reply__link">
                                </div>
                            </div>

                            <p><?= $value->isi_pelanggan ?></p>
                        <?php } else if ($value->balas != '0') {
                        ?>

                            <div class="media mt-3">
                                <div class="media-body">
                                    <div class="d-sm-flex justify-content-between mb-2">
                                        <h5 class="mb-sm-0">Admin <small class="text-muted ml-3"><?= $value->time_chatting ?></small></h5>
                                        <div class="media-reply__link">
                                        </div>
                                    </div>
                                    <p><?= $value->balas ?></p>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <form action="<?= base_url('pesan/send') ?>" method="post">
            <div class="input-group">
                <input type="text" name="pesan" placeholder="Type Message ..." class="form-control" required>
                <input type="hidden" name="id_pelanggan" value="<?= $id_pelanggan ?>">
                <span class="input-group-append">
                    <button type="submit" class="btn btn-primary">Send</button>
                </span>
            </div>
        </form>
    </div>