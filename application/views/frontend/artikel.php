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
	<div class="jumbotron artikelJ">
	  <div class="center">
	  	<h1 class="display-4">ARTIKEL KEMUDAHAN WARNA RUMAH</h1>
	  	<h1 class="display-4"><?= APP_NAME ?> <img src="<?= base_url('assets/img/logo/logo.png') ?>" width="60px"></h1>
	  </div>
	</div>
	<!-- jumbotron -->

	<!-- artikel -->
	<section id="artikel">
		<div class="container">
			<!-- mobile -->
			<div class="animate">
				<div class="row">
					<?php foreach ($artikel as $key => $data): ?>
						<div class="col-md-4" style="margin-bottom: 5%">
							<div class="card">
							  <img class="card-img-top" src="<?= base_url('assets/img/no-image.jpg') ?>" alt="Card image cap">
							  <div class="card-body">
							    <h5 class="card-title"><?= $data['judul'] ?></h5>
							    <p class="card-text">
							    	<span class="badge badge-info"><?= date('d-m-Y', strtotime($data['tanggal'])) ?></span>
							    	<span class="badge badge-danger"><?= $data['nama_kategori'] ?></span>
							    	<a href="https://www.instagram.com/citrawarnabali/">
							    		<span class="badge badge-warning">@citrawarnabali</span>
							    	</a>
							    </p>
							    <a href="<?= site_url('home/show/'.$data['link']) ?>" class="btn btn-warning btn-block">Baca Artikel</a>
							  </div>
							</div>
						</div>
					<?php endforeach ?>
				</div>
			</div>
			<div class="row justify-content-center">
				<nav class="nav-cek">
				  <ul class="pagination pagination-md">
				    <?= $paginate; ?>
				  </ul>
				</nav>
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