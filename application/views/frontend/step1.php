<!doctype html>
<html lang="en" id="home">
  <head>
    <?php $this->load->view('frontend/_page/head') ?>
  </head>
  <body>
  	<!-- navbar -->
    <?php $this->load->view('frontend/_page/navbar') ?>
	<!-- navbar -->
	
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="kotak">
					<div class="kotak2">
						<a href="<?= site_url('home/konsultasi/interior') ?>">
							<div class="img1"></div>
							Interior
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="kotak">
					<div class="kotak2">
						<a href="<?= site_url('home/konsultasi/eksterior') ?>">
							<div class="img2"></div>
							Eksterior
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- footer -->
	<?php $this->load->view('frontend/_page/footer') ?>
	<!-- footer -->

    <!-- Optional JavaScript -->
    <?php $this->load->view('frontend/_page/js') ?>
    <?php 
    	if(!empty($this->uri->segment(1))){
    		echo "
			<script>
				$('nav').addClass('custom');
			</script>
    		";
    	}
    ?>
  </body>
</html>