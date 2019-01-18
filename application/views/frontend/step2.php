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
					<div class="col-md-3">
						<h3>Nuansa</h3>
						<div class="list-group">
							<?php $i=1; foreach ($nuansa as $key => $value): ?>
								<a data-toggle="collapse" href="#collapseExample<?= $i;  ?>" aria-expanded="false" aria-controls="collapseExample<?= $i++;  ?>" class="list-group-item list-group-item-action">
									<?= $value->nama_nuansa ?>
								</a>
							<?php endforeach ?>
						</div>
					</div>
					<div class="col-md-9">
						<h3>Tampilan Warna</h3>
						<?php $i=1; foreach ($nuansa as $key => $data): ?>
							<div class="collapse" id="collapseExample<?= $i;  ?>">
							  <div class="card card-body">
							    <img src="<?= base_url('assets/img/upload/'.$data->gambar) ?>" width="70%">
							    <!-- warna -->
							    <?php 
							    	$this->db->select('*');
				                    $this->db->from('warna');
				                    $this->db->join('cc', 'warna.id_cc = cc.id_cc', 'inner');
				                    $warna = $this->db->where(['warna.id_nuansa' => $data->id_nuansa])->get()->result();
							    ?>
							    <!-- warna -->
							    <p>Rekomendasi Warna Nuansa: </p>
							    <div class="row">
							    	<?php foreach ($warna as $key => $value): ?>
		                                <div class="col-md-2">
		                                  <a href="<?= site_url('home/konsultasi/'.$pilih.'/'.$value->id_cc.'/'.$i) ?>">
		                                  	<img src="<?= base_url('assets/img/upload/cc/'.$value->gambar) ?>" alt="img" width="100%" class="img-thumbnail">
		                                  </a>
		                                </div>
		                            <?php endforeach ?>
							    </div>
							  </div>
							</div>
						<?php $i++; endforeach ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- artikel -->

	<!-- modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Rekomendasi Cat</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <div class="row">
	        	<?php foreach ($barang as $key => $data): ?>
		        	<?php 
		        		$a = $this->db->get_where('barang', ['kd_merk' => $data->kd_merk])->row();
		        	?>
		        	<div class="col-md-3">
		        		<center>
		        			<img src="https://www.cwabali.com/upload/produk/<?= $a->foto ?>" width="100%" class="img-thumbnail">
		        		</center>
		        		<p class="text-center">
		        			<b><?= $a->nm_barang ?></b><br>
		        			<?= $data->nm_barang ?><br>
		        			Harga : Rp. <?= number_format($data->harga) ?>
		        		</p>
		        	</div>
		        <?php endforeach ?>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- modal -->

	<!-- footer -->
	<?php $this->load->view('frontend/_page/footer') ?>
	<!-- footer -->

    <!-- Optional JavaScript -->
    <?php $this->load->view('frontend/_page/js') ?>
  </body>
</html>