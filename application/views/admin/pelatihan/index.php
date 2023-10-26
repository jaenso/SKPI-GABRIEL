<section class="content">
    <div class="row">
        <div class="col-12">
            <!-- /.box -->

            <div class="card card-info">
                <div style="margin:20px" class="callout callout-success">
                    <h4>Ketentuan Khusus</h4>
                    <p>
                        [1] Keikutsertaan Pelatihan/Kursus adalah yang <b><u>DIPEROLEH SELAMA MENJADI MAHASISWA</b></u><br>
                        [2] Dapat diajukan lebih dari satu sertifikat, dan <b><u>MAKSIMAL 7 SERTIFIKAT</b></u> yang dianggap <b><u>TERBAIK</b></u><br>
                        [3] File Bukti Sertifikat berformat <b><u> .pdf </b></u>
                    </p>
                </div>
                <div class="card-body">
                    <div class="btn-group">
                        &nbsp;<a href="<?= base_url(); ?>kegiatan/tambahPelatihan">
                            <button class="btn btn-block btn-primary btn-flat">Tambah Data </button>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr align="center">
                                <th>No.</th>
                                <th>Bentuk Kegiatan</th>
                                <th>Peran</th>
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
                                    <td>
                                        <?= $no++ ?>
                                    </td>
                                    <td><?= $data->kegiatan ?></td>
                                    <td><?= $data->peran ?></td>
                                    <td><?= $data->no_sertifikat ?></td>
                                    <td><?= $data->penyelenggara ?></td>
                                    <td><?= $data->periode ?></td>
                                    <td>
                                        <label class="btn bg-green"><?= $data->validasi ?> <i class="fa fa-check-square fa-lg"></i></label>

                                        <label class="btn bg-blue"><?= $data->validasi ?></label>
                                    </td>
                                    <td align="center">
                                        <label class="btn bg-green"><?= $data->validasi ?> <i class="fa fa-check-square fa-lg"></i></label>

                                        <a class="btn bg-olive" href="<?= base_url('kegiatan/editPelatihan/' . $data->id_kegiatan); ?>">
                                            <i class="fa fa-edit fa-lg" title="Edit"></i></a>
                                        <a class="btn bg-orange" href="<?= base_url('kegiatan/hapusKegiatan/' . $data->id_kegiatan . '/' . $data->kategori); ?>" onclick="return confirm('Yakin?');">
                                            <i class="fa fa-trash fa-lg" title="Delete"></i></a>

                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>

                </div><!-- /.box-body -->
</section>