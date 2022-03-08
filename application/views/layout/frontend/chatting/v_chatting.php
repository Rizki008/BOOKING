<!-- about -->
<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Chatting</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="about_img">
                        <div class="about_box">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media media-reply">
                                        <div class="media-body">
                                            <?php
                                            foreach ($chat as $key => $value) {
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

                                                    <div class="media">
                                                        <div class="media-body text-right">
                                                            <h5 class="media-heading text-right">Admin <small class="text-muted ml-3"><?= $value->time_chatting ?></small></h5>

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
                                <form action="<?= base_url('pesanan') ?>" method="post">
                                    <div class="input-group">
                                        <input type="text" name="pesan" id="name" placeholder="Type Message ..." class="form-control" required>
                                        <span class="input-group-append">
                                            <button type="submit" class="genric-btn primary circle float-right">Send</button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #/ container -->
            </div>
        </div>
    </div>
</div>