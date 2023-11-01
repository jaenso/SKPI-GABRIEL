<section class="content">
  <div class="row">
    <div class="col-6">
      <div class="card card-info">
        <div class="card card-outline card-primary">
          <div class="card-header">
            <h3 class="card-title">Data Profil Anda</h3>
          </div>
        </div>
        <div class="card-body">
          <a class="btn btn-app">
            <span class="badge bg-yellow">
              <h5><?= $organisasi ?></h5>
            </span>
            <i class="fa fa-university"></i> Data Keikutsertaan Organisasi/Kepanitiaan/Pembinaan Mahasiswa
          </a>
          <a class="btn btn-app">
            <span class="badge bg-green">
              <h5><?= $prestasi ?></h5>
            </span>
            <i class="fa fa-trophy"></i> Data Keikutsertaan Lomba/Prestasi Mahasiswa/Beasiswa
          </a>
          <a class="btn btn-app">
            <span class="badge bg-purple">
              <h5><?= $pertemuan ?></h5>
            </span>
            <i class="fa fa-users"></i> Data Keikutsertaan Pertemuan Ilmiah/Seminar/Kuliah Umum/Lokakarya
          </a>
          <a class="btn btn-app">
            <span class="badge bg-teal">
              <h5><?= $pelatihan ?></h5>
            </span>
            <i class="fa fa-certificate"></i> Data Keikutsertaan Pelatihan/Kursus
          </a>
          <a class="btn btn-app">
            <span class="badge bg-aqua">
              <h5><?= $penunjang ?></h5>
            </span>
            <i class="fa fa-signal"></i> Data Keikutsertaan Kegiatan Penunjang Profesi/Kompetensi/Pengalaman Kerja
          </a>
        </div>
      </div>
    </div>
    <div class="col-6">
      <div class="card card-info">
        <div class="card card-outline card-primary">
          <div class="card-header">
            <h3 class="card-title">Data Profil Anda</h3>
          </div>
        </div>
        <div class="callout callout-info">
          <h4>Data masih kosong?</h4>
          <p>Ayo Lengkapi Data Profil Kamu
            <a href="<?= base_url('mahasiswa/editMahasiswa/' . $mhs['nim']) ?>">Disini!</a>
          </p>
        </div>
        <div class="card-body">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <button class="btn btn-secondary">NIM</button>
            </div>
            <input type="text" class="form-control" value="<?= $mhs['nim']; ?>" disabled>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <button class="btn btn-secondary">Nama</button>
            </div>
            <input type="text" class="form-control" value="<?= $mhs['nama']; ?>" disabled>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <button class="btn btn-secondary">Tempat, Tanggal Lahir</button>
            </div>
            <input type="text" class="form-control" value="<?= $mhs['tempat_lahir']; ?>, <?= $mhs['tgl_lahir']; ?>" disabled>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <button class="btn btn-secondary">Nomor Ponsel</button>
            </div>
            <input type="text" class="form-control" value="<?= $mhs['no_hp']; ?>" disabled>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <button class="btn btn-secondary">Email</button>
            </div>
            <input type="text" class="form-control" value="<?= $mhs['email']; ?>" disabled>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <button class="btn btn-secondary">Jenis Kelamin</button>
            </div>
            <input type="text" class="form-control" value="<?= $mhs['kelamin']; ?>" disabled>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <button class="btn btn-secondary">Agama</button>
            </div>
            <input type="text" class="form-control" value="<?= $mhs['agama']; ?>" disabled>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <button class="btn btn-secondary">NIK</button>
            </div>
            <input type="text" class="form-control" value="<?= $mhs['nik']; ?>" disabled>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <button class="btn btn-secondary">Alamat di Palangka Raya</button>
            </div>
            <input type="text" class="form-control" value="<?= $mhs['alamat_pky']; ?>" disabled>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <button class="btn btn-secondary">Alamat Asal</button>
            </div>
            <input type="text" class="form-control" value="<?= $mhs['alamat_asal']; ?>" disabled>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <button class="btn btn-secondary">Nama Ayah</button>
            </div>
            <input type="text" class="form-control" value="<?= $mhs['ayah']; ?>" disabled>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <button class="btn btn-secondary">Nama Ibu</button>
            </div>
            <input type="text" class="form-control" value="<?= $mhs['ibu']; ?>" disabled>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <button class="btn btn-secondary">Tanggal Masuk Kuliah</button>
            </div>
            <input type="text" class="form-control" value="<?= $mhs['tgl_masuk']; ?>" disabled>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <button class="btn btn-secondary">Dosen PA</button>
            </div>
            <input type="text" class="form-control" value="<?= $mhs['dosen_pa']; ?>" disabled>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <button class="btn btn-secondary">Foto</button>
            </div>
            <?php if (!empty($mhs['foto'])) : ?>
              <img src="<?= base_url('uploads/MAHASISWA/' . $mhs['foto']); ?>" width="30%">
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>