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
          <h3>Edit Data Color Card</h3>
          <form action="<?= site_url('backend/colorcard/edit/'.$cc->id_cc) ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_cc" value="<?= $cc->id_cc ?>">

            <div class="form-group">
              <label>Nama Barang</label>
              <select name="id_barang" class="form-control">
                <option value="">== Pilih ==</option>
                <?php foreach ($barang as $key => $data): ?>
                  <?php if ($cc->id_barang == $data->id_barang): ?>
                    <option value="<?= $data->id_barang ?>" selected><?= $data->nm_barang ?></option>
                  <?php else: ?>
                    <option value="<?= $data->id_barang ?>"><?= $data->nm_barang ?></option>
                  <?php endif ?>
                <?php endforeach ?>
              </select>
              <div class="invalid-feedback">
                <?= form_error('id_barang') ?>
              </div>
            </div>

            <div class="form-group">
              <label>Nama Warna</label>
              <input type="text" name="nama_warna" class="form-control" value="<?= $cc->nama_warna ?>">
              <div class="invalid-feedback">
                <?= form_error('nama_warna') ?>
              </div>
            </div>
            
            <div class="form-group">
              <label>Gambar Lama</label><br>
              <img src="<?= base_url('assets/img/upload/cc/'.$cc->gambar) ?>" class="img-thumbnail" width="20%">
            </div>

            <div class="form-group">
              <label>Gambar Baru</label>
              <input type="file" name="gambar" class="form-control <?= form_error('gambar') ? 'is-invalid' : '' ?>">

              <input type="hidden" name="gambar_lama" value="<?= $cc->gambar ?>">
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
