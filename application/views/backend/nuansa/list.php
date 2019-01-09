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
        <?php if ($this->session->flashdata('success')): ?>
          <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
          </div>
        <?php endif; ?>

        <div class="container-fluid">
          <h3>Data Nuansa</h3>

          <!-- table -->
          <div class="card">
            <div class="card-header">
              <a class="nav-link" href="<?= site_url('backend/nuansa/add') ?>">
                <i class="fas fa-fw fa-plus"></i> Insert Data
              </a>
            </div>
            <div class="card-body">
              <div class="table responsive">
                <table class="table table-hover" id="dataTable">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>Nama Nuansa</th>
                      <th>Kategori</th>
                      <th>Gambar</th>
                      <th>warna</th>
                      <th>ACTION</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; foreach ($nuansa as $key => $data): ?>
                      <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data->nama_nuansa ?></td>
                        <td><?= $data->kategori ?></td>
                        <td><img src="<?= base_url('assets/img/upload/'.$data->gambar) ?>" alt="img" width="100px"></td>
                        <td>
                          <?php if ($data->warna == 'default'): ?>
                            <a href="<?= site_url('backend/nuansa/setColor/'.$data->id_nuansa) ?>" class="btn btn-primary btn-sm">
                              <i class="fas fa-palette"></i> Set Warna
                            </a>
                          <?php endif ?>
                        </td>
                        <td>
                          <a href="<?= site_url('backend/nuansa/edit/'.$data->id_nuansa) ?>" class="btn btn-success btn-sm">
                            Edit
                          </a>
                          <a href="<?= site_url('backend/nuansa/delete/'.$data->id_nuansa) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah data ingin di hapus?');">
                            Hapus
                          </a>
                        </td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

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
