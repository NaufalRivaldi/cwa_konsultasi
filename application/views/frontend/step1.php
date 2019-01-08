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
					<a href="#">Interior</a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="kotak">
					<a href="#">Eksterior</a>
				</div>
			</div>
		</div>
	</div>

	<!-- footer -->
	<?php $this->load->view('frontend/_page/footer') ?>
	<!-- footer -->

    <!-- Optional JavaScript -->
    <?php $this->load->view('frontend/_page/js') ?>
  </body>
</html>