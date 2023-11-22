<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card card-info">
                <div style="margin:20px" class="callout callout-success">
                    <h4>Ketentuan Pengajuan</h4>
                    <p>
                        [1] Harap diisi sesuai dengan <b><u>DATA DI KHS CETAK DARI BAGIAN AKADEMIK</b></u><br>
                        [2] File Bukti KHS berformat <b><u> .JPG </b></u>dan Nama file yang dikirim di rename dengan NIM masing-masing. Contoh: DAB119001_KHSsms1, DAB119001_KHSsms2 <br>
                        [3] Pengajuan yang berstatus VALID <b><u> tidak dapat diubah lagi </b></u>
                    </p>
                </div>
                <div class="card-body">
                    <div class="btn-group">
                        <a href="<?= base_url('akademik/tambahKHS/' . $user['username']); ?>" class="btn btn-block btn-primary btn-flat">Tambah Data</a>
                    </div>
                </div>

                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr align="center">
                                <th width="5%">No.</th>
                                <th width="30%">Data KHS</th>
                                <th width="20%">Data Akademik</th>
                                <th width="30%">Validasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data as $data) : ?>
                                <tr>
                                    <td>
                                        <?= $no++ ?>
                                    </td>
                                    <td>
                                        KHS Semester : <?= $data->semester ?><br>
                                        Jumlah Mata Kuliah : <?= $data->jml_matkul ?><br>
                                        Jumlah SKS yang Diprogramkan : <?= $data->jml_sks_program ?><br>
                                        Jumlah SKS Lulus : <?= $data->jml_sks_lulus ?> </td>
                                    <td>
                                        <?php if ($data->validasi != 'VALID' && $data->validasi != 'BARU') { ?>
                                            <a href="<?= base_url('akademik/tambahNilai/' . $data->id_khs . '/' . $user['username']); ?>" class="btn btn-danger btn-md">
                                                <i class="fa fa-tasks fa-lg" title="Input Nilai"></i>Isi Nilai</a>
                                        <?php } else if ($data->validasi == 'VALID') { ?>
                                            <a href="<?= base_url('akademik/lihatNilai/' . $data->id_khs . '/' . $user['username']); ?>" class="btn btn-success btn-md">
                                                <i class="fa fa-tasks fa-lg" title="Input Nilai"></i> Cek Input Nilai</a>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php if ($data->validasi == 'VALID') { ?>
                                            <label class="btn bg-green"><?= $data->validasi ?> <i class="fa fa-check-square fa-lg"></i></label>
                                            <br>Keterangan : <br>
                                            <?= $data->ket_validasi ?>
                                        <?php } else if ($data->validasi == 'TINJAU ULANG') { ?>
                                            <label class="btn bg-warning"><?= $data->validasi ?></label>
                                            <br>Keterangan : <br>
                                            <?= $data->ket_validasi ?>
                                        <?php } else if ($data->validasi == 'TIDAK VALID') { ?>
                                            <label class="btn bg-danger"><?= $data->validasi ?></label>
                                            <br>Keterangan : <br>
                                            <?= $data->ket_validasi ?>
                                        <?php } else if ($data->validasi == 'BARU') { ?>
                                            <label class="btn bg-blue"><?= $data->validasi ?></label>
                                            <br>Keterangan : <br>
                                            <?= $data->ket_validasi ?>
                                        <?php }  ?>
                                    </td>
                                    <td align="center">
                                        <?php if ($data->validasi == 'VALID') { ?>
                                            <label class="btn bg-green"><?= $data->validasi ?> <i class="fa fa-check-square fa-lg"></i></label>
                                        <?php } else if ($data->validasi != 'VALID' && $data->validasi != 'BARU') { ?>
                                            <a class="btn bg-olive" href="<?= base_url('akademik/editKHS/' . $data->id_khs . '/' . $user['username']); ?>">
                                                <i class="fa fa-edit fa-lg" title="Edit"></i></a>
                                            <a class="btn bg-orange" href="<?= base_url('akademik/hapusKHS/' . $data->id_khs . '/' . $user['username']); ?>" onclick="return confirm('Yakin?');">
                                                <i class="fa fa-trash fa-lg" title="Delete"></i></a>
                                        <?php } ?>
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