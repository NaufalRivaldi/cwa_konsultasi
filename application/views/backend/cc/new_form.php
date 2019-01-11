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
          <h3>Tambah Data Color Card</h3>
          <form action="<?= site_url('backend/colorcard/add') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label>Nama Barang</label>
              <select name="id_barang" class="form-control">
                <option value="">== Pilih ==</option>
                <?php foreach ($barang as $key => $data): ?>
                  <option value="<?= $data->id_barang ?>"><?= $data->nm_barang ?></option>
                <?php endforeach ?>
              </select>
              <div class="invalid-feedback">
                <?= form_error('id_barang') ?>
              </div>
            </div>

            <div class="form-group">
              <label>Nama Warna</label>
              <input type="text" name="nama_warna" class="form-control">
              <div class="invalid-feedback">
                <?= form_error('nama_warna') ?>
              </div>
            </div>

            <div class="form-group">
              <label>Gambar</label>
              <input type="file" name="gambar" class="form-control <?= form_error('gambar') ? 'is-invalid' : '' ?>">
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
