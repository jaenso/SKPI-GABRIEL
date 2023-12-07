<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>AdminLTE 3 | <?= $title ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>asset_admin/plugins/fontawesome-free/css/all.min.css" />
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url(); ?>asset_admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>asset_admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>asset_admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url(); ?>asset_admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url(); ?>asset_admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url(); ?>asset_admin/plugins/jqvmap/jqvmap.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>asset_admin/dist/css/adminlte.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>asset_admin/dist/css/style_adminlte.css" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url(); ?>asset_admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css" />
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css" />
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css" />
</head>

<body class="layout-fixed">
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nama Mahasiswa</label>
                                        <input required type="text" class="form-control" name="id_mahasiswa" value="<?= $data['nim']; ?> - <?= $data['nama']; ?>" readonly="readonly">
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor Ijazah</label>
                                        <input required type="text" class="form-control" name="no_ijazah" value="<?= $data['nomor_ijazah']; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lulus</label>
                                        <input required type="date" class="form-control" name="tgl_lulus" value="<?= $data['tanggal_lulus']; ?>" readonly>
                                    </div>
                                    <hr>
                                    <div class="card-header with-border">
                                        <h3 class="card-title"><b>Data Akademik (KHS)</b></h3>
                                    </div>
                                    <table class="table">
                                        <thead>
                                            <tr align="center">
                                                <th>No.</th>
                                                <th>KHS Semester</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($khs as $khs) : ?>
                                                <tr>
                                                    <td>
                                                        <?= $no++ ?>
                                                    </td>
                                                    <td><?= $khs->semester ?></td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                    <hr>
                                    <div class="card-header with-border">
                                        <h3 class="card-title"><b>Data Akademik (MBKM)</b></h3>
                                    </div>
                                    <table class="table">
                                        <thead>
                                            <tr align="center">
                                                <th>No.</th>
                                                <th>Bentuk Kegiatan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($mbkm as $mbkm) : ?>
                                                <tr>
                                                    <td>
                                                        <?= $no++ ?>
                                                    </td>
                                                    <td><?= $mbkm->kegiatan ?></td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                    <hr>
                                    <div class="card-header with-border">
                                        <h3 class="card-title"><b>Daftar Keikutsertaan dalam Organisasi/Kepanitiaan/Pembinaan Mahasiswa</b></h3><br>
                                    </div>
                                    <table class="table">
                                        <thead>
                                            <tr align="center">
                                                <th>No.</th>
                                                <th>Bentuk Kegiatan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($organisasi as $ogn) : ?>
                                                <tr>
                                                    <td>
                                                        <?= $no++ ?>
                                                    </td>
                                                    <td><?= $ogn->kegiatan ?></td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                    <hr>
                                    <div class="card-header with-border">
                                        <h3 class="card-title"><b>Daftar Keikutsertaan dalam Lomba/Prestasi Mahasiswa/Beasiswa</b></h3><br>
                                    </div>
                                    <table class="table">
                                        <thead>
                                            <tr align="center">
                                                <th>No.</th>
                                                <th>Bentuk Kegiatan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($prestasi as $pts) : ?>
                                                <tr>
                                                    <td>
                                                        <?= $no++ ?>
                                                    </td>
                                                    <td><?= $pts->kegiatan ?></td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                    <hr>
                                    <div class="card-header with-border">
                                        <h3 class="card-title"><b>Daftar Keikutsertaan dalam Pertemuan Ilmiah/Seminar/Kuliah Umum/Lokakarya</b></h3><br>
                                    </div>
                                    <table class="table">
                                        <thead>
                                            <tr align="center">
                                                <th>No.</th>
                                                <th>Bentuk Kegiatan</th>
                                                <th>Validasi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($pertemuan as $ptm) : ?>
                                                <tr>
                                                    <td>
                                                        <?= $no++ ?>
                                                    </td>
                                                    <td><?= $ptm->kegiatan ?></td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                    <hr>
                                    <div class="card-header with-border">
                                        <h3 class="card-title"><b>Daftar Keikutsertaan dalam Pelatihan/Kursus</b></h3><br>
                                    </div>
                                    <table class="table">
                                        <thead>
                                            <tr align="center">
                                                <th>No.</th>
                                                <th>Bentuk Kegiatan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($pelatihan as $plt) : ?>
                                                <tr>
                                                    <td>
                                                        <?= $no++ ?>
                                                    </td>
                                                    <td><?= $plt->kegiatan ?></td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                    <hr>
                                    <div class="card-header with-border">
                                        <h3 class="card-title"><b>Daftar Keikutsertaan dalam Kegiatan yang Menunjang Prestasi/Kompetensi/Pengalaman Kerja/Jurnal/Prosiding</b></h3><br>
                                        <font class="bg-orange">*) Pastikan Informasi Keikutsertaan telah LENGKAP DAN VALID sebelum mengajukan pembuatan SKPI</font>
                                    </div>
                                    <table class="table">
                                        <thead>
                                            <tr align="center">
                                                <th>No.</th>
                                                <th>Bentuk Kegiatan/Nama Jurnal/Prosiding</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($penunjang as $pnj) : ?>
                                                <tr>
                                                    <td>
                                                        <?= $no++ ?>
                                                    </td>
                                                    <td><?= $pnj->kegiatan ?></td>
                                                </tr>
                                            <?php endforeach ?> </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>