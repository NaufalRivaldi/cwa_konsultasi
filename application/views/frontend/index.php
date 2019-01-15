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
	  	<hr class="hr-yellow">
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
				<?php $no=1; foreach ($artikel as $key => $data): ?>
					<?php if ($no % 2 != 0): $no++?>
						<div class="row">
							<div class="col-sm text1">
								<h3><?= $data['judul'] ?></h3>
								<span class="badge badge-info"><?= date('d-m-Y', strtotime($data['tanggal'])) ?></span>
								<span class="badge badge-danger"><?= $data['nama_kategori'] ?></span>
						    	<a href="https://www.instagram.com/citrawarnabali/">
						    		<span class="badge badge-warning">@citrawarnabali</span>
						    	</a>
								<br>
								<?= substr($data['isi'], 0, 200) ?><br>
								<a href="<?= site_url('home/artikel/'.$data['link']) ?>" class="btn btn-warning">Baca Artikel</a>
							</div>
							<div class="col-sm">
								<img src="<?= base_url('assets/img/no-image.jpg') ?>" width="100%">
							</div>
						</div>
					<?php else: $no++?>
						<div class="row">
							<div class="col-sm">
								<img src="<?= base_url('assets/img/no-image.jpg') ?>" width="100%">
							</div>
							<div class="col-sm text2">
								<h3><?= $data['judul'] ?></h3>
								<span class="badge badge-info"><?= date('d-m-Y', strtotime($data['tanggal'])) ?></span>
								<span class="badge badge-danger"><?= $data['nama_kategori'] ?></span>
						    	<a href="https://www.instagram.com/citrawarnabali/">
						    		<span class="badge badge-warning">@citrawarnabali</span>
						    	</a>
								<br>
								<?= substr($data['isi'], 0, 200) ?><br>
								<a href="<?= site_url('home/artikel/'.$data['link']) ?>" class="btn btn-warning">Baca Artikel</a>
							</div>
						</div>
					<?php endif ?>
				<?php endforeach ?>
			</div>

			<!-- mobile -->
			<div class="animate artikel-mobile">
				<div class="row">
					<h2>ARTIKEL KEMUDAHAN WARNA RUMAH</h2>
				</div>
				<div class="row">
					<?php foreach ($artikel as $key => $data): ?>
						<div class="col-md-4" style="margin-bottom: 5%">
							<div class="card">
							  <img class="card-img-top" src="<?= base_url('assets/img/no-image.jpg') ?>" alt="Card image cap">
							  <div class="card-body">
							    <h5 class="card-title"><?= $data['judul'] ?></h5>
							    <p class="card-text">
							    	<span class="badge badge-info"><?= date('d-m-Y', strtotime($data['tanggal'])) ?></span>
							    	<span class="badge badge-info"><?= $data['nama_kategori'] ?></span>
							    	<a href="https://www.instagram.com/citrawarnabali/">
							    		<span class="badge badge-warning">@citrawarnabali</span>
							    	</a>
							    </p>
							    <a href="<?= site_url('home/artikel/'.$data['link']) ?>" class="btn btn-warning btn-block">Baca Artikel</a>
							  </div>
							</div>
						</div>
					<?php endforeach ?>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<center>
						<a href="<?= site_url('home/artikel/') ?>" class="btn btn-warning btn-lg">Lihat Lebih Banyak Artikel</a>
					</center><br>
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