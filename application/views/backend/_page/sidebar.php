<ul class="sidebar navbar-nav">
  <li class="nav-item active">
    <a class="nav-link" href="<?= site_url('backend') ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-fw fa-boxes"></i>
      <span>Data</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
      <a class="dropdown-item" href="<?= site_url('backend/nuansa') ?>">Nuansa</a>
      <a class="dropdown-item" href="<?= site_url('backend/cc') ?>">Color Card</a>
    </div>
  </li>
</ul>