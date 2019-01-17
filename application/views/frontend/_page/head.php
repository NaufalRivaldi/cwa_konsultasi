<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php if ($this->uri->segment(2) == 'artikel'): ?>
	<meta name="description" content="<?= $artikel->excerpt ?>">
	<meta name="keywords" content="<?= $artikel->keyword ?>">
	<meta name="author" content="@citrawarnabali">
<?php endif ?>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">
<link rel="icon" href="<?= base_url('assets/img/logo/logo.png') ?>">

<title><?= ucwords($this->uri->segment(2))." ".APP_NAME ?></title>