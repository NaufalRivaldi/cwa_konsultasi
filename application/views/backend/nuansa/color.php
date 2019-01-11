<!DOCTYPE html>
<html lang="en">

  <head>

    <?php $this->load->view('backend/_page/head') ?>

  </head>

  <body id="page-top">

    <?php $this->load->view('backend/_page/navbar') ?>

    <div id="wrapper">

      <!-- Sidebar -->
      <?php $this->load->view('backend/_page/sidebar.php') ?>

      <div id="content-wrapper">

        <div class="container-fluid">
          <h3>Set Warna <?= $nuansa->nama_nuansa ?></h3>
          <form action="<?= site_url('backend/nuansa/setColor/'.$nuansa->id_nuansa) ?>" method="post" enctype="multipart/form-data" name="add_color" id="add_color">
            <input type="hidden" name="id_nuansa" value="<?= $nuansa->id_nuansa ?>">

            <div class="form-group">
              <label>Gambar :</label><br>
              <img src="<?= base_url('assets/img/upload/'.$nuansa->gambar) ?>" width="40%">
            </div>
            
            <label>Set Warna :</label>
            <div class="container" id="dynamic_field">
              <div class="row">
                <div class="col">
                  <input type="text" name="nama_warna[]" id="nama_warna" class="form-control list_nama">
                </div>
                <div class="col">
                  <a href="#" name="add" id="add" class="btn btn-primary">Tambah</a>
                </div>
              </div>
            </div>
            <br>
            <input type="submit" name="btn" value="Simpan" class="btn btn-primary">
          </form>
          <br>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <?php $this->load->view('backend/_page/footer') ?>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php $this->load->view('backend/_page/modal') ?>

    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view('backend/_page/js') ?>

  </body>

</html>
