<!doctype html>
<html lang="en">
  <head>
    <?php $this->load->view('frontend/_page/head') ?>
  </head>
  <body>
  	<!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
	  <div class="container">
	  	<a class="navbar-brand" href="#"><?= APP_NAME ?></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		    <div class="navbar-nav">
		      <a class="nav-item nav-link active" href="#">Beranda <span class="sr-only">(current)</span></a>
		      <a class="nav-item nav-link" href="#">Artikel</a>
		      <a class="nav-item nav-link" href="#">Konsultasi</a>
		    </div>
		    <div class="navbar-nav ml-auto">
		      <a class="nav-item nav-link" href="#">Kembali ke Website <i class="fa fa-money-check"></i><span class="sr-only">(current)</span></a>
		    </div>
		  </div>
	  </div>
	</nav>
	<!-- navbar -->
	
	<!-- jumbtron -->
	<div class="jumbotron xjumbotron">
	  <div class="center">
	  	<h1 class="display-4">Selamat Datang di Konsultasi Warna Online</h1>
	  	<h1 class="display-4"><?= APP_NAME ?> <img src="<?= base_url('assets/img/logo/logo.png') ?>" width="60px"></h1>
	  	<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  tempor incididunt ut labore et dolore magna aliqua.</p>
	  </div>
	</div>
	<!-- jumbotron -->

	<!-- artikel -->
	<section id="artikel">
		<div class="container">
			<div class="row">
				<h2>ARTIKEL KEMUDAHAN WARNA RUMAH</h2>
			</div>
			<div class="row">
				<div class="col-sm">
					<p class="text1">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
				<div class="col-sm">
					<img src="<?= base_url('assets/img/no-image.jpg') ?>" width="100%">
				</div>
			</div>
			<div class="row">
				<div class="col-sm">
					<img src="<?= base_url('assets/img/no-image.jpg') ?>" width="100%">
				</div>
				<div class="col-sm">
					<p class="text2">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- artikel -->

	<!-- konsultasi -->
	<center>
		<h2>APA YANG ANDA BUTUHKAN?</h2>
	</center>
	<section id="konsultasi">
		<div class="container">
			<div class="row">
				<div class="col-md-6 d-flex justify-content-center">
					<a href="#" class="center">
						<h3>Konsultasi Pemilihan Warna</h3>
						<img src="<?= base_url('assets/img/konsultasi.png') ?>" width="60%">
					</a>
				</div>
				<div class="col-md-6 d-flex justify-content-center">
					<a href="https://www.cwabali.com/product/kategori" class="center">
						<h3>Produk Kami</h3>
						<img src="<?= base_url('assets/img/web-cwa.png') ?>" width="60%">
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- konsultasi -->

	<!-- footer -->
	<section id="footer">
		<div class="row">
			<div class="col-md">
				<p class="text-center">
					&copy; Naufal Rivaldi - 2018
				</p>
			</div>
			<div class="col-md">
				<a href="#" class="big-icon">
					<i class="fa fa-money-check"></i>
				</a>
				<a href="#" class="big-icon">
					<i class="fab fa-facebook"></i>
				</a>
				<a href="#" class="big-icon">
					<i class="fab fa-instagram"></i>
				</a>
			</div>
		</div>
	</section>
	<!-- footer -->

    <!-- Optional JavaScript -->
    <?php $this->load->view('frontend/_page/js') ?>
  </body>
</html>