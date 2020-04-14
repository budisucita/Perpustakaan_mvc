<div class="content anim-typewriter-content">
		<h1>Library Perpustakaan</h1>
	</div>

	<div class="row-card">
		<div class="container-tags">
			<p class="tags">
				<a class="tag" href="<?= BASEURL ?>/homepage_user">All</a>
				<?php foreach ($data['kategori'] as $kategori): ?>
					<a class="tag" href="<?= BASEURL ?>/kategori/index/<?= $kategori['id_kategori'] ?>"><?= $kategori['kategori'] ?></a>
				<?php endforeach ?>
			</p>
		</div>
	</div>
	<div class="row">
		<?php foreach ($data['buku'] as $buku): ?>
			<div class="col-lg-4 ">
				<?php $img_b =$buku['gambar']; ?>
				<div class="example-2 card-user mt-3">
					<div class="wrapper-card" style="background:url('http://perpustakaan.com/projek_perpustakaan/Perpustakaan_mvc/public/img/daftar-buku/<?php echo $img_b ?>') center/cover no-repeat; ">
						<div class="header-card">
							<div class="date">
								<span class="day">12</span>
								<span class="month">Aug</span>
								<span class="year">2016</span>
							</div>
							<ul class="menu-content">
								<li>
									<a href="" class="fa fa-bookmark-o"></a>
								</li>
								<li><a href="" class="fa fa-heart-o"><span>18</span></a></li>
								<li><a href="" class="fa fa-comment-o"><span>3</span></a></li>
							</ul>
						</div>
						<div class="data-card">
							<div class="content-card">
								<span class="author"><?=$buku['pengarang'] ?></span>
								<h1 class="title"><a href="#"><?=$buku['nama_buku'] ?></a></h1>
								<p class="text"><?=$buku['deskripsi'] ?></p>
								<a href="<?= BASEURL ?>/homepage_user/detail/<?= $buku['id_buku'] ?>" class="button" target="_blank">Read more</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach ?>
