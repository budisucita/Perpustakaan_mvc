<?php

if ($_SESSION['status'] != 'ada' && $_SESSION['role'] !== '3') {
	header('Location: '.BASEURL.'/home/page');
}elseif ($_SESSION['status'] = 'ada' && $_SESSION['role'] == '1') {
	header('Location: '.BASEURL.'/');
}elseif ($_SESSION['status'] = 'ada' && $_SESSION['role'] == '2') {
	header('Location: '.BASEURL.'/petugas');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User | Skensa</title>
	<link href="<?= BASEURL ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'> 
	 <link href='<?= BASEURL ?>/img/asset/title.png' rel='shortcut icon'>
	<!-- <link  rel="stylesheet" type="text/css" href="<?= BASEURL ?>/vendor/fontawesome-free/css/all.min.css"> -->
	<link rel="stylesheet" href="<?= BASEURL ?>/css/style.css">
	<link rel="stylesheet" type="text/css" href=" <?= BASEURL ?>/css/style_card.css">
	<link rel="stylesheet" type="text/css" href=" <?= BASEURL ?>/css/sb-admin-2.css">


</head>
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

