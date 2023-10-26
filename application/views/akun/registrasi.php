<section class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="#" class="h1"><b>Admin</b>LTE</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <?= $this->session->flashdata('message'); ?>
        <form method="POST" action="<?= base_url('akun/registrasi'); ?>">
          <div class="input-group mb-3">
            <input type="text" class="form-control" id="username" name="username" placeholder="NIM">
            <small class=" form-text text-danger"><?= form_error('username'); ?></small>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            <small class="form-text text-danger"><?= form_error('email'); ?></small>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" id="password1" name="password" placeholder="Password">
            <small class="form-text text-danger"><?= form_error('password1'); ?></small>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
          </div>
        </form>
        <p class="mb-0">
          <a href="<?= base_url(); ?>akun" class="text-center">Sudah punya akun?</a>
        </p>
      </div>
    </div>
  </div>
</section>