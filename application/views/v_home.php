<!-- three_box -->
<div class="three_box">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="box_text">
                    <h3>Pengambilan Barang</h3>
                    <i><img src="<?= base_url() ?>template2/images/thr.png" alt="#" /></i>
                    <p>Kami Siap Mengambil Barang Servis Anda Dengan Cepat Dan Gratis Biaya Pengambilan</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box_text">
                    <h3>Diagnosa Kerusakan</h3>
                    <i><img src="<?= base_url() ?>template2/images/thr1.png" alt="#" /></i>
                    <p>Kami Akan Memperbaiki Secara Dengan Baik, Cepat, Aman, Demi Kepuasan Pelanggan</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box_text">
                    <h3>Antar Barang Servis</h3>
                    <i><img src="<?= base_url() ?>template2/images/thr2.png" alt="#" /></i>
                    <p>Kami Mengantarkan Barang Yang Telah Selesai Diservis dengan cepat dan aman</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- three_box -->
<!-- about -->
<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Tentang Toko Kami</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="about_img">
                        <div class="about_box">
                            <h3> TOKO ELEKTRONIK SIANR Jaya </h3>
                            <p> Toko Elektronik Sinar Jaya adalah suatu usaha yang bergerak di bidang service alat elektronik. Toko Elektronik Sinar Jaya yang bergerak di bidang service/perbaikan alat elektronik ini juga menjual sparepart atau suku cadang alat elektronik. Pendiri toko elektronik sinar jaya adalah bapak Anggi Priatna, bapak anggi memulai usahanya pada bulan september tahun 2011 yang beralamat di desa selajambe, kecamatan, selajambe, kabupaten kuningan. sebelumnya toko elektronik sinar jaya hanya menyediakan jasa service elektronik, namun seiring berjalannya waktu kini toko elektronik sinar jaya juga mulai menjual sparepart atau sukucadang alat elektronik. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end about -->
<!-- wedo  section -->
<div class="wedo ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Apa Yang Kita lakukan</h2>
                    <p>Sudah menjadi fakta bahwa lama pembaca akan terganggu</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="row">
                    <div class="col-md-6 margin_bottom">
                        <div class="work">
                            <figure><img src="<?= base_url() ?>template2/images/gambar1.jpg" alt="#" /></figure>
                        </div>
                        <div class="work_text">
                            <h3>Quick repair<br><span class="blu">Total Service</span></h3>
                        </div>
                    </div>
                    <div class="col-md-6 margin_bottom">
                        <div class="work">
                            <figure><img src="<?= base_url() ?>template2/images/gambar2.jpg" alt="#" /></figure>
                        </div>
                        <div class="work_text">
                            <h3>Quick repair<br><span class="blu">Total Service</span></h3>
                        </div>
                    </div>
                    <div class="col-md-6 margin_bottom">
                        <div class="work">
                            <figure><img src="<?= base_url() ?>template2/images/gambar4.jpg" alt="#" /></figure>
                        </div>
                        <div class="work_text">
                            <h3>Quick repair<br> <span class="blu">Total Service</span></h3>
                        </div>
                    </div>
                    <div class="col-md-6 margin_bottom">
                        <div class="work">
                            <figure><img src="<?= base_url() ?>template2/images/gambar1.jpg" alt="#" /></figure>
                        </div>
                        <div class="work_text">
                            <h3>Quick repair<br><span class="blu">Total Service</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end wedo  section -->
   <!-- testimonial -->
   <div class="testimonial">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Testimonial</h2>
                     <p>Pelanggan Kami Mengatakan</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide testimonial_Carousel " data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption ">
                                 <div class="row">
                                 <?php foreach ($reviews as $key => $value) { ?>
                                    <div class="col-md-6 margin_boot">
                                       <div class="test_box">
                                          <i><img src="images/tes.jpg" alt="#"/></i>
                                          <h4><?= $value->nama ?></h4>
                                          <span>(<?= $value->tanggal?> )</span>
                                          <p><?= $value->isi?></p>
                                       </div>
                                    </div>
                                    <?php } ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                 <?php foreach ($reviews as $key => $value) { ?>
                                    <div class="col-md-6 margin_boot">
                                       <div class="test_box">
                                          <i><img src="images/tes.jpg" alt="#"/></i>
                                          <h4><?= $value->nama ?></h4>
                                          <span>(<?= $value->tanggal?> )</span>
                                          <p><?= $value->isi?></p>
                                       </div>
                                    </div>
                                    <?php } ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                 <?php foreach ($reviews as $key => $value) { ?>
                                    <div class="col-md-6 margin_boot">
                                       <div class="test_box">
                                          <i><img src="images/tes.jpg" alt="#"/></i>
                                          <h4><?= $value->nama ?></h4>
                                          <span>(<?= $value->tanggal?> )</span>
                                          <p><?= $value->isi?></p>
                                       </div>
                                    </div>
                                    <?php } ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end testimonial -->