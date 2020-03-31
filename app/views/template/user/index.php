<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User | Skensa</title>
	<link href="<?= BASEURL ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style_card.css">
</head>
<body>
	<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow user-nav">
		<!-- Topbar Navbar -->
		<div class="mr-auto">
			<h1>Skensa</h1>
		</div>
		<ul class="navbar-nav ml-auto">
			<div class="topbar-divider d-sm-block"></div>
			<li class="nav-item">
				<span class="mr-2 text-gray-600 small">Wahyu Purnama</span>
				<img class="img-profile rounded-circle" src="./img/wahyu.jpg">
			</li>
		</ul>
	</nav>
	
	<div class="content anim-typewriter-content">
		<h1>Library Perpustakaan</h1>
	</div>
	<br><br> <br><br>
	<div class="row">
		<div class="col-lg-9">
			<div class="row-card">
				<?php foreach ($data['buku'] as $buku): ?>
					<?php $img_b = $buku['gambar']; ?>
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
										<a href="#" class="fa fa-bookmark-o"></a>
									</li>
									<li><a href="#" class="fa fa-heart-o"><span>18</span></a></li>
									<li><a href="#" class="fa fa-comment-o"><span>3</span></a></li>
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
				<?php endforeach ?>
			</div>
		</div>
		<div class="col-lg-3 kategori">
			<br><br><br><br>
			<h3><i class="fas fa-book"></i> &nbsp;KATEGORI BUKU</h3>
		    <div class="checklist categories">
		    	<ul>
		    		<?php foreach ($data['kategori'] as $kategori): ?>
		    			<li><a href="" class="check" data-id="<?= $kategori['id_kategori'] ?>"><span></span> <?= $kategori['kategori'] ?></a></li>
		    		<?php endforeach ?>
		        	
		            
		        </ul>
		    </div>

		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>
		$('.categories a span').each(function(i, el){
		$(el).append('<span class="x"></span><span class="y"></span>');
		
		$(el).parent().on('click', function(){
			if($(this).hasClass('checked')){				
				$(el).find('.y').removeClass('animate');	
				setTimeout(function(){
					$(el).find('.x').removeClass('animate');							
				}, 50);	
				$(this).removeClass('checked');
				return false;
			}
			
			$(el).find('.x').addClass('animate');		
			setTimeout(function(){
				$(el).find('.y').addClass('animate');
			}, 100);	
			$(this).addClass('checked');
			return false;
		});
	});
	</script>
	<script src="<?= BASEURL ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= BASEURL ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= BASEURL ?>/js/script.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>

