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
          <h3>Tambah Data Nuansa</h3>
          <form action="<?= site_url('backend/nuansa/add') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label>Nama Nuansa</label>
              <input type="text" name="nama_nuansa" class="form-control <?= form_error('nama_nuansa') ? 'is-invalid' : '' ?>">
              <div class="invalid-feedback">
                <?= form_error('nama_nuansa') ?>
              </div>
            </div>

            <div class="form-group">
              <label>Kategori</label>
              <select name="kategori" class="form-control">
                <option value="">== Pilih ==</option>
                <option value="interior">Interior</option>
                <option value="eksterior">Eksterior</option>
              </select>
              <div class="invalid-feedback">
                <?= form_error('kategori') ?>
              </div>
            </div>

            <div class="form-group">
              <label>Gambar</label>
              <input type="file" name="gambar" class="form-control <?= form_error('name') ? 'is-invalid' : '' ?>">
              <div class="invalid-feedback">
                <?= form_error('gambar') ?>
              </div>
            </div>

            <input type="submit" name="btn" value="Simpan" class="btn btn-primary">
          </form>

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
