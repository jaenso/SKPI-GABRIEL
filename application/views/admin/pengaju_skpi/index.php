<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card card-info">
        <div style="margin: 20px" class="callout callout-success">
          <h4>Ketentuan Khusus</h4>
          <p>
            [1] Pastikan <b><u>DATA AKADEMIK dan DATA KEIKUTSERTAAN</u></b> telah selesai diinput dan semua bersatatus VALID<br>
            [2] Pengajuan SKPI hanya dapat dilakukan 1X, apabila ada kesalahan silahkan hapus pengajuan dan <b><u>AJUKAN BARU KEMBALI</u></b> <br>
            [3] Pengajuan SKPI yang berstatus VALID akan <b><u>DIKUNCI SISTEM DAN TIDAK DAPAT DIAJUKAN ULANG</u></b><br>
            [4] File Ijazah berformat gambar <b><u>.JPG / .PNG</u></b> untuk memvalidasi Nomor Ijazah yang diinput
          </p>
        </div>

        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr align="center">
                <th>No.</th>
                <th width="5%">NIM</th>
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
                  <td>
                    <?= $data->nim ?>
                    <br>
                    <?= $data->nama ?>
                  </td>
                  <td><?= $data->nomor_ijazah ?></td>
                  <td><?= $data->tanggal_lulus ?></td>
                  <td>
                    <?php if ($data->validasi == 'VALID') { ?>
                      <label class="btn bg-green"><?= $data->validasi ?> <i class="fa fa-check-square fa-lg"></i></label>
                    <?php } else if ($data->validasi == 'TINJAU ULANG') { ?>
                      <label class="btn bg-warning"><?= $data->validasi ?></label>
                    <?php } else if ($data->validasi == 'TIDAK VALID') { ?>
                      <label class="btn bg-danger"><?= $data->validasi ?></label>
                    <?php } else if ($data->validasi == 'BARU') { ?>
                      <label class="btn bg-blue"><?= $data->validasi ?></label>
                    <?php }  ?>
                  </td>
                  <td>
                    <?php if ($data->validasi == 'VALID' || $data->validasi == 'TINJAU ULANG' || $data->validasi == 'TIDAK VALID' || $data->validasi == 'BARU') { ?>
                      <?= $data->ket_validasi ?>
                    <?php } ?>
                  </td>
                  <td align="center">
                    <?php if ($data->status != 'selesai') { ?>
                      <a class="btn bg-olive" href="<?= base_url('skpi/editSKPIAdmin/' . $data->id_skpi . '/' . $data->nim); ?>">
                        <i class="fa fa-edit fa-lg" title="Edit"></i>
                      </a>
                      <a class="btn bg-blue" href="<?= base_url('skpi/tambahFileSKPI/' . $data->id_skpi); ?>">
                        <i class="fa fa-envelope fa-lg" title="Cetak SKPI"></i>
                      </a>
                    <?php } ?>
                    <a class="btn bg-orange" href="<?= base_url('skpi/hapusSKPIAdmin/' . $data->id_skpi); ?>" onclick="return confirm('Yakin?');">
                      <i class="fa fa-trash fa-lg" title="Delete"></i>
                    </a>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>