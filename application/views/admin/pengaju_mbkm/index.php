<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card card-info">
                <div class="card-body">
                    <div class="table-responsive"> <!-- Tambahkan div ini -->
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr align="center">
                                    <th>No.</th>
                                    <th width="5%">NIM</th>
                                    <th>Bentuk Kegiatan</th>
                                    <th>Keterangan</th>
                                    <th>Validasi</th>
                                    <th>Ket. Validasi</th>
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
                                            <?= $data->nim ?>
                                            <br>
                                            <?= $data->nama ?>
                                        </td>
                                        <td><?= $data->kegiatan ?></td>
                                        <td><?= $data->keterangan ?></td>
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
                                            <?php if ($data->validasi == 'VALID') { ?>
                                                <?= $data->ket_validasi ?>
                                            <?php } else if ($data->validasi == 'TINJAU ULANG') { ?>
                                                <?= $data->ket_validasi ?>
                                            <?php } else if ($data->validasi == 'TIDAK VALID') { ?>
                                                <?= $data->ket_validasi ?>
                                            <?php } else if ($data->validasi == 'BARU') { ?>
                                                <?= $data->ket_validasi ?>
                                            <?php }  ?>
                                        </td>

                                        <td align="center">
                                            <a class="btn bg-olive" href="<?= base_url('akademik/editMBKMAdmin/' . $data->id_mbkm); ?>">
                                                <i class="fa fa-edit fa-lg" title="Edit"></i></a>
                                            <a class="btn bg-orange" href="<?= base_url('akademik/hapusMBKMAdmin/' . $data->id_mbkm); ?>" onclick="return confirm('Yakin?');">
                                                <i class="fa fa-trash fa-lg" title="Delete"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>