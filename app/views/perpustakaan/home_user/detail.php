<div class="judul-detail">
	<h1>Detail Buku</h1>
</div>

<div class="flex">
	<div class="img">
		<img src="<?= BASEURL ?>/img/bg.jpg" alt="">
	</div>
	<div class="deskripsi">
		<table>
				<tr>
					<td>Nama Buku&nbsp; </td>
					<td>&nbsp;&nbsp;:&nbsp;&nbsp; <?= $data['buku']['nama_buku'] ?></td>
				</tr>
				<tr>
					<td>Pengarang Buku&nbsp; </td>
					<td>&nbsp;&nbsp;:&nbsp;&nbsp; <?= $data['buku']['pengarang'] ?></td>
				</tr>
				<tr>
					<td>Kategori Buku&nbsp; </td>
					<td>&nbsp;&nbsp;:&nbsp;&nbsp; <?= $data['buku']['kategori'] ?></td>
				</tr>
				<tr>
					<td>Jumlah Buku&nbsp; </td>
					<td>&nbsp;&nbsp;:&nbsp;&nbsp; <?= $data['buku']['jumlah_buku'] ?></td>
				</tr>
				<tr>
					<td>Tanggal Masuk Buku&nbsp; </td>
					<td>&nbsp;&nbsp;:&nbsp;&nbsp; <?= $data['buku']['tanggal_masuk'] ?></td>
				</tr>
				<tr>
					<td>Kondisi&nbsp; </td>
					<td>&nbsp;&nbsp;:&nbsp;&nbsp; <?= $data['buku']['kondisi_buku'] ?></td>
				</tr>
		</table>
	</div>
</div>
