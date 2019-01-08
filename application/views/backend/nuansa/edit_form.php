<!DOCTYPE html>
<html lang="en">

  <head>

    <?php $this->load->view('admin/_page/head') ?>

  </head>

  <body id="page-top">

    <?php $this->load->view('admin/_page/navbar') ?>

    <div id="wrapper">

      <!-- Sidebar -->
      <?php $this->load->view('admin/_page/sidebar.php') ?>

      <div id="content-wrapper">

        <div class="container-fluid">
          <h3>Form Edit User</h3>
          <form action="<?= site_url('admin/user/edit/'.$user->user_id) ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $user->user_id ?>">
            <div class="form-group">
              <label>Username</label>
              <input type="text" name="username" class="form-control <?= form_error('usename') ? 'is-invalid' : '' ?>" value="<?= $user->username ?>">
              <div class="invalid-feedback">
                <?= form_error('username') ?>
              </div>
            </div>

            <div class="form-group">
              <label>Name</label>
              <input type="text" name="name" class="form-control <?= form_error('name') ? 'is-invalid' : '' ?>" value="<?= $user->name ?>">
              <div class="invalid-feedback">
                <?= form_error('name') ?>
              </div>
            </div>

            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" class="form-control <?= form_error('email') ? 'is-invalid' : '' ?>" value="<?= $user->email ?>">
              <div class="invalid-feedback">
                <?= form_error('email') ?>
              </div>
            </div>

            <div class="form-group">
              <label>No Telepon</label>
              <input type="text" name="no_telp" class="form-control <?= form_error('no_telp') ? 'is-invalid' : '' ?>" value="<?= $user->no_telp ?>">
              <div class="invalid-feedback">
                <?= form_error('no_telp') ?>
              </div>
            </div>

            <div class="form-group">
              <label>Address</label>
              <textarea name="address" class="form-control <?= form_error('address') ? 'is-invalid' : '' ?>""><?= $user->address ?></textarea>
              <div class="invalid-feedback">
                <?= form_error('address') ?>
              </div>
            </div>

            <input type="submit" name="btn" value="Save" class="btn btn-primary">
          </form>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <?php $this->load->view('admin/_page/footer') ?>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php $this->load->view('admin/_page/modal') ?>

    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view('admin/_page/js') ?>

  </body>

</html>
