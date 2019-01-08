<!doctype html>
<html lang="en" id="home">
  <head>
    <?php $this->load->view('frontend/_page/head') ?>
  </head>
  <body>
  	<!-- navbar -->
    <?php $this->load->view('frontend/_page/navbar') ?>
	<!-- navbar -->
	
	<!-- jumbtron -->
	<div class="jumbotron xjumbotron">
	  <div class="center">
	  	<h1 class="display-4">Selamat Datang di Konsultasi Warna Online</h1>
	  	<h1 class="display-4"><?= APP_NAME ?> <img src="<?= base_url('assets/img/logo/logo.png') ?>" width="60px"></h1>
	  	<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	  </div>
	</div>
	<!-- jumbotron -->

	<!-- artikel -->
	<section id="artikel">
		<div class="container">
			<div class="animate hidden artikel-web">
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
			<div class="animate artikel-mobile">
				<div class="row">
					<h2>ARTIKEL KEMUDAHAN WARNA RUMAH</h2>
				</div>
				<div class="row">
					<div class="col-md-4" style="margin-bottom: 5%">
						<div class="card">
						  <img class="card-img-top" src="<?= base_url('assets/img/no-image.jpg') ?>" alt="Card image cap">
						  <div class="card-body">
						    <h5 class="card-title">Card title</h5>
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						    <a href="#" class="btn btn-primary">Go somewhere</a>
						  </div>
						</div>
					</div>
					<div class="col-md-4" style="margin-bottom: 5%">
						<div class="card">
						  <img class="card-img-top" src="<?= base_url('assets/img/no-image.jpg') ?>" alt="Card image cap">
						  <div class="card-body">
						    <h5 class="card-title">Card title</h5>
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						    <a href="#" class="btn btn-primary">Go somewhere</a>
						  </div>
						</div>
					</div>
					<div class="col-md-4" style="margin-bottom: 5%">
						<div class="card">
						  <img class="card-img-top" src="<?= base_url('assets/img/no-image.jpg') ?>" alt="Card image cap">
						  <div class="card-body">
						    <h5 class="card-title">Card title</h5>
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						    <a href="#" class="btn btn-primary">Go somewhere</a>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- artikel -->

	<!-- konsultasi -->
	<section id="konsultasi">
		<div class="container">
			<div class="row">
				<h2>APA YANG ANDA BUTUHKAN?</h2>
			</div>
			<div class="row">
				<div class="col-md-6 d-flex justify-content-center">
					<a href="<?= site_url('home/konsultasi') ?>" class="center">
						<img src="<?= base_url('assets/img/konsultasi.png') ?>" width="60%">
						<h3>Konsultasi Pemilihan Warna</h3>
					</a>
				</div>
				<div class="col-md-6 d-flex justify-content-center">
					<a href="https://www.cwabali.com/product/kategori" class="center">
						<img src="<?= base_url('assets/img/web-cwa.png') ?>" width="60%">
						<h3>Produk Kami</h3>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- konsultasi -->

	<!-- footer -->
	<?php $this->load->view('frontend/_page/footer') ?>
	<!-- footer -->

    <!-- Optional JavaScript -->
    <?php $this->load->view('frontend/_page/js') ?>
  </body>
</html>