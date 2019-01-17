<!doctype html>
<html lang="en" id="home">
  <head>
    <?php $this->load->view('frontend/_page/head') ?>
  </head>
  <body>
  	<!-- navbar -->
    <?php $this->load->view('frontend/_page/navbar') ?>
	<!-- navbar -->
	
	<!-- artikel -->
	<section id="artikel">
		<div class="container">
			<!-- mobile -->
			<div class="animate" style="margin-top: 90px">
				<div class="row">
					<div class="col-md-9">
						<h3><?= $artikel->judul ?></h3>
						<hr class="hr-yellow">
						<p>
							Post : 
							<span class="badge badge-info"><?= date('d-m-Y', strtotime($artikel->tanggal)) ?></span>
					    	<a href="https://www.instagram.com/citrawarnabali/">
					    		<span class="badge badge-warning">@citrawarnabali</span>
					    	</a><br>
					    	Kategori : <span class="badge badge-danger"><?= $artikel->nama_kategori ?></span>
						</p>

						<img src="<?= base_url('assets/img/no-image.jpg') ?>" width="80%">

						<p><?= $artikel->isi ?></p>
						
						<!-- comment -->
						<div id="disqus_thread"></div>
					</div>
					<div class="col-md-3">
						<h3>Baca Juga</h3>
						<hr class="hr-yellow">
						<br>
						<?php foreach ($popular_artikel as $key => $data): ?>
							<div class="col-md-12" style="margin-bottom: 5%">
								<div class="card">
								  <img class="card-img-top" src="<?= base_url('assets/img/no-image.jpg') ?>" alt="Card image cap">
								  <div class="card-body">
								    <h5 class="card-title"><?= $data['judul'] ?></h5>
								    <a href="<?= site_url('home/artikel/'.$data['link']) ?>" class="btn btn-warning btn-block">Baca Artikel</a>
								  </div>
								</div>
							</div>
						<?php endforeach ?>
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