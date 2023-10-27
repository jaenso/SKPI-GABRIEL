<section class="content">
  <div class="row">
    <div class="col-12">

      <div class="card card-info">
        <div style="margin:20px" class="callout callout-success">
          <h4>Ketentuan Khusus</h4>
          <p>
            [1] Pastikan <b><u>DATA AKADEMIK dan DATA KEIKUTSERTAAN </b></u>telah selesai diinput dan semua bersatatus VALID<br>
            [2] Pengajuan SKPI hanya dapat dilakukan 1X, apabila ada kesalahan silahkan hapus pengajuan dan <b><u>AJUKAN BARU KEMBALI</b></u> <br>
            [3] Pengajuan SKPI yang berstatus VALID akan<b><u> DIKUNCI SISTEM DAN TIDAK DAPAT DIAJUKAN ULANG</b></u><br>
            [4] File Ijazah berformat gambar <b><u> .JPG / .PNG </b></u> untuk memvalidasi Nomor Ijazah yang diinput
          </p>
        </div>
        <div class="card-body">
          <div class="btn-group">
            &nbsp;<a href="<?= base_url('skpi/tambahSKPI/' . $user['username']); ?>">
              <button class="btn btn-block btn-primary btn-flat">Tambah Data </button>
            </a>
          </div>
        </div>

        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr align="center">
                <th>No.</th>
                <th>Nomor Izajah</th>
                <th>Tanggal, Bulan, Tahun Lulus</th>
                <th>Validasi</th>
                <th width="20%">Keterangan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($data as $data) : ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $data->nomor_ijazah ?></td>
                  <td><?= $data->tanggal_lulus ?></td>
                  <td>
                    <?php if ($data->validasi == 'VALID') { ?>
                      <label class="btn bg-green"><?= $data->validasi ?> <i class="fa fa-check-square fa-lg"></i></label>
                    <?php } else if ($data->validasi == 'BARU') { ?>
                      <label class="btn bg-blue"><?= $data->validasi ?></label>
                    <?php }  ?>
                  </td>
                  <td><?= $data->ket_validasi ?></td>
                  <td align="center">
                    <?php if ($data->validasi == 'VALID') { ?>
                      <label class="btn bg-green"><?= $data->validasi ?> <i class="fa fa-check-square fa-lg"></i></label>
                    <?php } else if ($data->validasi != 'VALID') { ?>
                      <a class="btn bg-olive" href="<?= base_url('skpi/editSKPI/' . $data->id_skpi . '/' . $user['username']); ?>">
                        <i class="fa fa-edit fa-lg" title="Edit"></i></a>
                      <a class="btn bg-orange" href="<?= base_url('skpi/hapusSKPI/' . $data->id_skpi . '/' . $user['username']); ?>" onclick="return confirm('Yakin?');">
                        <i class="fa fa-trash fa-lg" title="Delete"></i></a>
                    <?php } ?>

                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>

        </div><!-- /.box-body -->
</section>