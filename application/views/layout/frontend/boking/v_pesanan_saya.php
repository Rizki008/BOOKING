<!-- about -->
<div class="about">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="titlepage">
					<h2>Proses Boking</h2>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="about_img">
						<div class="about_box">
							<div class="card">
								<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
									<h6 class="m-0 font-weight-bold text-primary">Boking</h6>
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
								<div class="table-responsive">
									<table class="table align-items-center table-flush">
										<thead class="thead-light">
											<tr>
												<th>No Boking</th>
												<th>Tanggal Boking</th>
												<th>Nama Barang</th>
												<th>Deskripsi Kerusakan</th>
												<th>Harga</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($data_boking as $key => $value) { ?>
												<tr>
													<td><a href="#"><?= $value->no_boking ?></a></td>
													<td><?= $value->tgl_boking ?></td>
													<td><?= $value->nama_produk ?></td>
													<td><?= $value->deskripsi_kerusakan ?></td>
													<td><?= $value->total_bayar ?></td>
													<td>
														<?php if ($value->status == 0) { ?>
															<span class="badge badge-danger">Pending</span>
															<span class="badge badge-warning">Menunggu acc pengambilan oleh kurir</span>
														<?php } else if ($value->status == 1) { ?>
															<span class="badge badge-info">Proses Pengambilan barang</span>
														<?php } else if ($value->status == 2) { ?>
															<span class="badge badge-info">Proses Perbaikan </span><br>
															<span class="badge badge-warning">Silahkan Melakukan Pembayaran </span>
														<?php } else if ($value->status == 3) { ?>
															<span class="badge badge-warning">Menunggu Konfirmasi Pembayaran</span>
														<?php } else if ($value->status == 4) { ?>
															<span class="badge badge-success">Pembayran Di Konfirmasi <br> (Selesai)</span>
														<?php } else if ($value->status == 5) { ?>
															<span class="badge badge-danger">Dibatalkan!!!</span>
														<?php } else if ($value->status == 6) { ?>
															<span class="badge badge-success">Pembayaran Ditempat!!!</span>
														<?php } ?>
													</td>
													<td>
														<?php if ($value->status == 2) { ?>
															<a href="<?= base_url('pesanan_saya/bayar/' . $value->id_bayar) ?>" class="btn btn-sm btn-primary">Bayar Tf</a>
															<button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#cod<?= $value->id_bayar ?>" id="#myBtn">Bayar COD</button>
															<button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#update<?= $value->id_bayar ?>" id="#myBtn">Batalkan</button>
														<?php } ?>
														<?php if ($value->status == 4) { ?>
															<a href="<?= base_url('pesanan_saya/detail_selesai/' . $value->no_boking) ?>" class="btn btn-sm btn-primary">Riviews</a>
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
				</div>
			</div>
		</div>
	</div>
</div>


<?php foreach ($data_boking as $key => $value) { ?>
	<!-- Modal -->
	<div class="modal fade" id="update<?= $value->id_bayar ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"><?= $value->no_boking ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Apakah Anda Yakin Akan Dibatalkan ???</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
					<a href="<?= base_url('pesanan_saya/dibatalkan/' . $value->id_bayar) ?>" class="btn btn-primary">Ya</a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

<?php foreach ($data_boking as $key => $value) { ?>
	<!-- Modal -->
	<div class="modal fade" id="cod<?= $value->id_bayar ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"><?= $value->no_boking ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<?php echo form_open_multipart('pesanan_saya/cod/' . $value->id_bayar) ?>
				<div class="modal-body">
					<p>Apakah Anda Yakin Akan Bayar COD/Ditempat ???</p>
					<br>

					<input type="text" name="status" value="6" class="form-control" hidden>
					<div class="form-group">
						<label>UploadBukti Bayar</label>
						<div class="custom-file">
							<input type="file" class="custom-file-input" name="bukti_bayar">
							<label class="custom-file-label" for="customFile">Choose file</label>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
					<!-- <a href="<?= base_url('pesanan_saya/cod/' . $value->id_bayar) ?>" class="btn btn-primary">Ya</a> -->
					<button type="submit" class="btn btn-primary">Ya</button>
				</div>
				<?php echo form_close() ?>
			</div>
		</div>
	</div>
<?php } ?>
<!-- end about -->
<div class="about">
	<div class="container">
		<div class="row">
		</div>
	</div>
</div>