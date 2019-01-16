<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?= SITE_NAME ?></title>

	<!-- Bootstrap core CSS-->
	<link href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

	<!-- Custom fonts for this template-->
	<link href="<?= base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets/img/logo/logo.png') ?>" rel="icon">
	<style type="text/css">
		.form{
			margin-top: 100px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md"></div>
			<div class="col-md">
				<div class="form">
					<div class="form-login">
						<h3>Login Konsultasi - <?= APP_NAME ?></h3>
						<hr>
						<?php if ($this->session->flashdata('danger')): ?>
				          <div class="alert alert-danger" role="alert">
				        	<?php echo $this->session->flashdata('danger'); ?>
				          </div> 
				        <?php endif; ?>
						<form action="<?= site_url('backend/backend/login') ?>" method="post">
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" class="form-control">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="Password" name="password" class="form-control">
							</div>
							<input type="submit" name="btn" value="Login" class="btn btn-primary btn-block">
						</form>
						<center>Copyright © Naufal Rivaldi 2019</center>
					</div>
				</div>
			</div>
			<div class="col-md"></div>
		</div>
	</div>


	<!-- js -->
	<script src="<?= base_url('assets/jquery/jquery.min.js') ?>"></script>
	<script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
	<!-- js -->
</body>
</html>