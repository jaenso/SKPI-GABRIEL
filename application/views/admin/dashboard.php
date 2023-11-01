<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
          <div class="inner">
            <h3><?= $admin ?></h3>
            <p>Admin Staff</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            <h3><?= $mhs_all ?></h3>
            <p>Mahasiswa</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <section class="col-lg-12">
        <div class="card bg-gradient-light">
          <div class="card-header border-0">
            <h3 class="card-title">
              Meminta Persetujuan
            </h3>
            <div class="card-tools">
              <h3 class="card-title">
                <?= $mhs_offline ?> Mahasiswa
              </h3>
              <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-user"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <?php
              foreach ($data as $data) : ?>
                <div class="col-3">
                  <div class="card">
                    <div class="card-body">
                      <?php if (empty($data->foto)) { ?>
                        <img src="<?= base_url('uploads/MAHASISWA/default.jpg'); ?>" class="  w-50" />
                      <?php } else { ?>
                        <img src="<?= base_url('uploads/MAHASISWA/' . $data->foto); ?>" class="  w-50" />
                      <?php } ?>
                      <h3><?= $data->nama ?></h3>
                    </div>
                  </div>
                </div>
              <?php endforeach ?>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</section>