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
          <div class="card">
            <div class="card-header">
              <h3>Data User : <?= ucwords($user->name) ?></h3>
            </div>
            <div class="card-body">
              <table class="table">
                <tr>
                  <td align="right" width="150px">Username :</td>
                  <td><?= $user->username ?></td>
                </tr>
                <tr>
                  <td align="right">Name :</td>
                  <td><?= ucwords($user->name) ?></td>
                </tr>
                <tr>
                  <td align="right">Email :</td>
                  <td><?= $user->email ?></td>
                </tr>
                <tr>
                  <td align="right">No Telepon :</td>
                  <td><?= $user->no_telp ?></td>
                </tr>
                <tr>
                  <td align="right">Address :</td>
                  <td><?= $user->address ?></td>
                </tr>
              </table>
            </div>
          </div>
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
