<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card card-info">
                <div class="card-body">
                    <div class="btn-group">
                        &nbsp;<a href="<?= base_url(); ?>akademik/tambahMBKM">
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
                                    <td><?= $data->kegiatan ?></td>
                                    <td><?= $data->keterangan ?></td>
                                    <td>
                                        <?php if ($data->validasi == 'VALID') { ?>
                                            <label class="btn bg-green"><?= $data->validasi ?> <i class="fa fa-check-square fa-lg"></i></label>
                                        <?php } else if ($data->validasi == 'BARU') { ?>
                                            <a class="btn bg-blue"><?= $data->validasi ?></a>
                                        <?php }  ?>
                                    </td>
                                    <td><?= $data->ket_validasi ?></td>

                                    <td align="center">
                                        <?php if ($data->validasi == 'VALID') { ?>
                                            <label class="btn bg-green"><?= $data->validasi ?> <i class="fa fa-check-square fa-lg"></i></label>
                                        <?php } else if ($data->validasi != 'VALID') { ?>
                                            <a class="btn bg-olive" href="<?= base_url('akademik/editMBKM/' . $data->id_mbkm); ?>">
                                                <i class="fa fa-edit fa-lg" title="Edit"></i></a>
                                            <a class="btn bg-orange" href="<?= base_url('akademik/hapusMBKM/' . $data->id_mbkm); ?>" onclick="return confirm('Yakin?');">
                                                <i class="fa fa-trash fa-lg" title="Delete"></i></a>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
</section>