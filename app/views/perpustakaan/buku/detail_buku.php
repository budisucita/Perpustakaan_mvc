<!-- Start Container -->
<div class="container-fluid">
	<div class="row">
 		<div class="flash-data" data-flashdata="<?= Flasher::flash(); ?>"></div>
 	</div>
 	<!-- Start Card Body -->
 	<div class="card-body">
 		<div class="row">
	 			<div class="col-lg-4 col-md-5">
	 				<img src="<?= BASEURL ?>/img/daftar-buku/<?= $data['buku']['gambar'] ?>" alt="" width="100%" style="box-shadow: 5px 10px 10px rgba(0,0,0,.3); border-radius: 20px;">
	 			</div>
 			<div class="col-lg-8 col-md-5">
 				<!-- Start Card -->
 				<div class="card" style="box-shadow: 5px 5px 7px rgba(0,0,0,.2);">
 					<div class="card-body text-center">
 						<h5 class="card-title text-center text-dark"  style="font-family: 'Lobster'; font-size:3em;">Detail Buku</h5>
 						<div class="d-inline-flex text-left " style="margin-left: 5rem">
 							<!-- Start Table -->
 								<table>
	 								<tr>
	 									<td width="30%">Judul Buku</td>
	 									<td> &nbsp; &nbsp;: &nbsp; <?= $data['buku']['nama_buku'] ?></td>

	 								</tr>
	 								<tr>
	 									<td>Nama Pengarang</td>

	 									<td> &nbsp; &nbsp;: &nbsp;<?= $data['buku']['pengarang'] ?></td>
	 								</tr>
	 								<tr>
	 									<td>Kategori</td>
	 									<td> &nbsp; &nbsp;: &nbsp;<?= $data['buku']['kategori'] ?> </td>

	 								</tr>
	 								<tr>
	 									<td>Deskripsi</td>
	 									<td> &nbsp; &nbsp;: &nbsp; <?= $data['buku']['deskripsi'] ?></span></td>

	 								</tr>
	 								<tr>
	 									<td>Jumlah Buku</td>
	 									<td> &nbsp; &nbsp;: &nbsp; <?= $data['buku']['jumlah_buku'] ?></td>
	 								</tr>
	 								<tr>
	 									<td>Tanggal Masuk</td>
	 									<td> &nbsp; &nbsp;: &nbsp; <?= date('d F Y', strtotime($data['buku']['tanggal_masuk'])) ?></td>
	 								</tr>
	 								<tr>
	 									<td>Kondisi Buku</td>
	 									<td> &nbsp; &nbsp;: &nbsp; 
	 										<?= $data['buku']['kondisi_buku'] === 'Baik' ? "<b style='color:#1cc88a'>Baik</b>" : "<b style='color:#e74a3b'>Rusak</b>";?>
	 									</td>
	 								</tr>
	 							</table>
 							<!-- End Table -->
 						</div>

 					</div>
 					<!-- Untuk kembali ke index buku -->
 					<div class="p-2 text-center" >
 						<a href="<?= BASEURL ?>/buku/index" class="btn btn-primary"><span class="nav-item"><i class="rotate fas fa-sign-out-alt" ></i></span>&nbsp;Kembali</a>
 					</div>
 				</div>
 				<!-- End Card -->
 			</div>
 		</div>
 	</div>
 	<!-- End Card Body-->
 </div>
 <!-- End Container -->