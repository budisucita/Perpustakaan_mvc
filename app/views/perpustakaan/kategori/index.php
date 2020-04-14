<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User | Skensa</title>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>
	<!-- <link  rel="stylesheet" type="text/css" href="<?= BASEURL ?>/vendor/fontawesome-free/css/all.min.css"> -->
	<link rel="stylesheet" href="<?= BASEURL ?>/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/css/style_card.css">
	<link rel="stylesheet" type="text/css" href=" <?= BASEURL ?>/css/sb-admin-2.css">
</head>
<style>
	body{
		overflow-x: hidden;
	}
</style>
<body>
	<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow user-nav">
		<!-- Topbar Navbar -->
		<div class="mr-auto">
			<div class="search">
				<form>
					<input type="search" placeholder="Search">
				</form>
			</div>
		</div>
		<ul class="navbar-nav ml-auto">
			<div class="topbar-divider d-sm-block"></div>
			<li class="nav-item dropdown no-arrow">
				<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="mr-2 d-none d-lg-inline text-gray-600 small mt-3"><?= $_SESSION['nama'] ?></span>
					<img class="img-profile rounded-circle" src="<?= BASEURL ?>/img/wahyu.jpg">
				</a>
				<!-- Dropdown - User Information -->
				<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
					<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
						<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
					</a>
				</div>
			</li>
		</ul>
	</nav>


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
	<div class="row ">
		<?php foreach ($data['buku'] as $buku): ?>
			<div class="col-xl-4">
				<?php $img_b = $buku['gambar']; ?>
				<div class="example-2 card-user mt-3">
					<div class="wrapper-card" style="background:url('http://perpustakaan.com/Perpustakaan_mvc/public/img/daftar-buku/<?php echo $img_b ?>') center/cover no-repeat; ">

						<div class="header-card">
							<div class="date">
								<span class="day">07</span>
								<span class="month">Apr</span>
								<span class="year">2020</span>
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
								<span class="author"><?= $buku['pengarang'] ?></span>
								<h1 class="title"><a href="#"><?= $buku['nama_buku'] ?></a></h1>
								<p class="text"><?= $buku['deskripsi'] ?></p>
								<a href="#" class="button">Read more</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach ?>
	</div>
	
	<!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= BASEURL ?>/auth/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="<?= BASEURL ?>/vendor/jquery/jquery.min.js"></script>
	<script src="<?= BASEURL ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= BASEURL ?>/js/script.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>
