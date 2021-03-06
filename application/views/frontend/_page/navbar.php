<nav class="navbar navbar-expand-lg fixed-top navbar-light">
  <div class="container">
  	<a class="navbar-brand" href="#">
			<img src="<?= base_url('assets/img/logo.png') ?>" width="100" class="d-inline-block align-top" alt=""> 
		</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse asd" id="navbarNavAltMarkup">
	    <div class="navbar-nav">
	      <a class="nav-item nav-link scroll <?= (empty($this->uri->segment(2))) ? 'active' : '' ?>" href="<?= (empty($this->uri->segment(2))) ? '#home' : site_url() ?>">Beranda <span class="sr-only">(current)</span></a>
	      <a class="nav-item nav-link scroll <?= ($this->uri->segment(2) == 'artikel' || $this->uri->segment(2) == 'showartikel') ? 'active' : '' ?>" href="<?= (empty($this->uri->segment(2))) ? '#artikel' : site_url('home/showartikel') ?>">Artikel</a>
	      <a class="nav-item nav-link scroll <?= ($this->uri->segment(2) == 'konsultasi') ? 'active' : '' ?>" href="<?= ($this->uri->segment(2) != 'konsultasi') ? '#konsultasi' : site_url('home/konsultasi') ?>">Konsultasi</a>
	    </div>
	    <div class="navbar-nav ml-auto">
	      <a class="nav-item nav-link" href="https://www.cwabali.com/">Kembali ke Website <i class="fa fa-money-check"></i><span class="sr-only">(current)</span></a>
	    </div>
	  </div>
  </div>
</nav>