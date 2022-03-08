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

	<div class="row">
		<div class="col-lg-12 mb-4">
			<!-- Simple Tables -->
			<div class="card">
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Simple Tables</h6>
				</div>
				<div class="table-responsive">
					<table class="table align-items-center table-flush">
						<thead class="thead-light">
							<tr>
								<th>No Boking</th>
								<th>Nama Pelanggan</th>
								<th>Nama Barang</th>
								<th>Tanggal Boking</th>
								<th>Deskripsi Kerusakan</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($pembayaran as $key => $value) { ?>
								<tr>
									<td><a href="#"><?= $value->no_boking ?></a></td>
									<td><?= $value->nama ?></td>
									<td><?= $value->nama_produk ?></td>
									<td><?= $value->tgl_boking ?></td>
									<td><?= $value->deskripsi_kerusakan ?></td>
									<td>
										<?php if ($value->status == 0) { ?>
											<span class="badge badge-danger">Pending</span>
										<?php } else if ($value->status == 1) { ?>
											<span class="badge badge-success">Pengambilan</span>
										<?php } else if ($value->status == 2) { ?>
											<span class="badge badge-info">Proses Pembayaran</span>
										<?php } else if ($value->status == 3) { ?>
											<span class="badge badge-warning">Konfirmasi Pembayaran</span>
										<?php } else if ($value->status == 4) { ?>
											<span class="badge badge-success">Pembayaran Telah Dikonfirmasi</span>
										<?php } else if ($value->status == 5) { ?>
											<span class="badge badge-danger">Dibatalkan Pelanggan!!!</span>
										<?php } else if ($value->status == 6) { ?>
											<span class="badge badge-success">Bayar Ditempat!!!</span>
										<?php } ?>
									</td>
									<td><?php
										if ($value->status == 3) { ?>
											<button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#cek<?= $value->id_bayar ?>" id="#myBtn">Cek Pembayaran</button>

										<?php }
										if ($value->status == 2) { ?>
											<button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#update<?= $value->id_bayar ?>" id="#myBtn">Update Harga</button>
										<?php } ?>
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


	<?php foreach ($pembayaran as $key => $value) { ?>
		<!-- Modal -->
		<div class="modal fade" id="cek<?= $value->id_bayar ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel"><?= $value->no_boking ?></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<table class="table">
							<tr>
								<th>Atas Nama</th>
								<th>:</th>
								<td><?= $value->atas_nama ?></td>
							</tr>
							<tr>
								<th>Jumlah Bayar</th>
								<th>:</th>
								<td><?= number_format($value->jumlah_bayar, 0)  ?></td>
							</tr>
							<tr>
								<th>Nama Bank</th>
								<th>:</th>
								<td><?= $value->nama_bank ?></td>
							</tr>
							<tr>
								<th>No Rekening</th>
								<th>:</th>
								<td><?= $value->no_rek ?></td>
							</tr>
						</table>
						<img class="img-fluid pad" src="<?= base_url('assets/bukti_bayar/' . $value->bukti_bayar) ?>" alt="">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
						<a href="<?= base_url('admin/detail/' . $value->id_bayar) ?>" class="btn btn-primary">Konfirmasi</a>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>

	<?php foreach ($pembayaran as $key => $value) { ?>
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
						<?php echo form_open('admin/harga/' . $value->id_bayar) ?>
						<table class="table">
							<tr>
								<th>Nama Barang</th>
								<th>:</th>
								<td><?= $value->nama_produk ?></td>
							</tr>
							<tr>
								<th>Kerusana</th>
								<th>:</th>
								<td><?= $value->deskripsi_kerusakan ?></td>
							</tr>
							<tr>
								<th>Harga</th>
								<th>:</th>
								<td><input type="number" name="total_bayar" class="form-control" placeholder="Update Harga" required></td>
							</tr>
						</table>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Update harga</button>
					</div>
					<?php echo form_close() ?>
				</div>
			</div>
		</div>
	<?php } ?>
