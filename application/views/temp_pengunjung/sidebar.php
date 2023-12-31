<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="<?= base_url(); ?>asset_admin/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60" />
    </div>
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" />
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <a href="index3.html" class="brand-link">
        <img src="<?= base_url(); ?>asset_admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8" />
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>
      <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= base_url('uploads/MAHASISWA/' . $mhs['foto']); ?>" class="img-circle elevation-2" />
          </div>
          <div class="info">
            <a href="#" class="d-block"><?= $user['nama']; ?></a>
          </div>
        </div>
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" />
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item menu-open">
              <a href="<?= base_url('pengunjung/index/' . $user['username']); ?>" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <?php if ($user['validasi'] == 'tidak_aktif') { ?>
              <li class="nav-item">
                <a href="<?= base_url('mahasiswa/editMahasiswa/' . $user['username']); ?>" class="nav-link">
                  <i class="nav-icon fas fa-lock"></i>
                  <p>MENU DIKUNCI LENGKAPI BIODATA UNTUK MEMBUKA MENU
                  </p>
                </a>
              </li>
            <?php } ?>
            <?php if ($user['validasi'] == 'aktif') { ?>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-certificate"></i>
                  <p>
                    Akademik
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= base_url('pengunjung/pengaju_nilai/' . $user['username']); ?>" class="nav-link">
                      <i class="fas fa-upload nav-icon"></i>
                      <p>Pengajuan Input Nilai</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('pengunjung/pengaju_mbkm/' . $user['username']); ?>" class="nav-link">
                      <i class="fas fa-upload nav-icon"></i>
                      <p>Kegiatan MBKM</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-certificate"></i>
                  <p>
                    Data Keikutsertaan
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= base_url('pengunjung/organisasi/' . $user['username']); ?>" class="nav-link">
                      <i class="fas fa-university nav-icon"></i>
                      <p>Organisasi/Kepanitiaan/Pembinaan Mahasiswa</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('pengunjung/prestasi/' . $user['username']); ?>" class="nav-link">
                      <i class="fas fa-trophy nav-icon"></i>
                      <p>Lomba/Prestasi Mahasiswa/Beasiswa</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('pengunjung/pertemuan/' . $user['username']); ?>" class="nav-link">
                      <i class="fas fa-users nav-icon"></i>
                      <p>Pertemuan Ilmiah/Seminar/Kuliah Umum/Lokakarya</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('pengunjung/pelatihan/' . $user['username']); ?>" class="nav-link">
                      <i class="fas fa-certificate nav-icon"></i>
                      <p>Pelatihan/Kursus</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('pengunjung/penunjang/' . $user['username']); ?>" class="nav-link">
                      <i class="fas fa-users nav-icon"></i>
                      <p>Kegiatan Penunjang Profesi/Kompetensi/Pengalaman Kerja</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>
                    SKPI
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= base_url('pengunjung/pengaju_skpi/' . $user['username']); ?>" class="nav-link">
                      <i class="bi bi-ticket-detailed nav-icon"></i>
                      <p>Pengajuan SKPI</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('pengunjung/cetak_skpi/' . $user['username']); ?>" class="nav-link">
                      <i class="fas fa-file nav-icon"></i>
                      <p>Cetak SKPI</p>
                    </a>
                  </li>
                </ul>
              </li>
            <?php } ?>
            <li class="nav-item">
              <a href="<?= base_url(); ?>akun/logout" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Logout
                </p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"><?= $title ?></h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">

                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"><?= $sub_title ?></li>
                <li class="breadcrumb-item active"><?= $deskripsi ?></li>
              </ol>
            </div>
          </div>
        </div>
      </div>