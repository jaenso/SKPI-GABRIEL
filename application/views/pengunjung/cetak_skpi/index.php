<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card card-info">
        <div style="margin:20px" class="callout callout-success">
          <p>
            Silahkan Cek Berkala pada menu ini, File Cetak SKPI akan kami kirimkan setelah pengajuan <b><u> VALID </b></u>
          </p>
        </div>

        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr align="center">
                <th width="5%">No.</th>
                <th>Nama File</th>
                <th>NIM Mahasiswa</th>
                <th>File</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($data as $data) : ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $data->file_skpi ?></td>
                  <td><?= $data->nim ?></td>
                  <td>
                    <a href="<?= base_url('uploads/IJAZAH/' . $data->file_skpi); ?>" target="_blank"><?= $data->file_skpi; ?></a>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>

        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.data -->
</section>