<nav class="navbar navbar-expand navbar-dark bg-primary static-top">

  <a class="navbar-brand mr-1" href="index.html"><?= APP_NAME ?></a>

  <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
    <i class="fas fa-bars"></i>
  </button>

  <!-- Navbar -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle fa-fw"></i> User : <?= $this->session->userdata('username') ?>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">        
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
      </div>
    </li>
  </ul>

</nav>