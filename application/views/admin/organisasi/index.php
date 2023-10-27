<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card card-info">
                <div style="margin:20px" class="callout callout-success">
                    <h4>Ketentuan Khusus</h4>
                    <p>
                        [1] Keikutsertaan Organisasi/Kepanitiaan/Pembinaan Mahasiswa adalah yang <b><u>DIPEROLEH SELAMA MENJADI MAHASISWA</b></u><br>
                        [2] Dapat diajukan lebih dari satu sertifikat, dan <b><u>MAKSIMAL 7 SERTIFIKAT</b></u> yang dianggap <b><u>TERBAIK</b></u><br>
                        [3] File Bukti Sertifikat berformat <b><u> .pdf </b></u>
                    </p>
                </div>

                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr align="center">
                                <th>No.</th>
                                <th width="5%">NIM</th>
                                <th>Bentuk Kegiatan</th>
                                <th>Jabatan</th>
                                <th>No. Sertifikat/Surat</th>
                                <th>Penyelenggara</th>
                                <th>Waktu/Periode</th>
                                <th>Validasi</th>
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
                                    <td><?= $data->kegiatan ?></td>
                                    <td><?= $data->peran ?></td>
                                    <td><?= $data->no_sertifikat ?></td>
                                    <td><?= $data->penyelenggara ?></td>
                                    <td><?= $data->periode ?></td>
                                    <td>
                                        <?php if ($data->validasi == 'VALID') { ?>
                                            <label class="btn bg-green"><?= $data->validasi ?> <i class="fa fa-check-square fa-lg"></i></label>
                                        <?php } else if ($data->validasi == 'TIDAK VALID') { ?>
                                            <label class="btn bg-danger"><?= $data->validasi ?></label>
                                        <?php } else if ($data->validasi == 'BARU') { ?>
                                            <label class="btn bg-blue"><?= $data->validasi ?></label>
                                        <?php }  ?>
                                    </td>
                                    <td align="center">
                                        <a class="btn bg-olive" href="<?= base_url('kegiatan/editKegiatanAdmin/' . $data->id_kegiatan . '/' . $data->kategori); ?>">
                                            <i class="fa fa-edit fa-lg" title="Edit"></i></a>
                                        <a class="btn bg-orange" href="<?= base_url('kegiatan/hapusKegiatanAdmin/' . $data->id_kegiatan . '/' . $data->kategori); ?>" onclick="return confirm('Yakin?');">
                                            <i class="fa fa-trash fa-lg" title="Delete"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>

                </div><!-- /.box-body -->
</section><!-- /.content --> <!-- /.content -->