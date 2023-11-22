<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card card-info">
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr align="center">
                                <th>No.</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Prodi</th>
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
                                    <td><?= $data->nim ?></td>
                                    <td><?= $data->nama ?></td>
                                    <td><?= $data->prodi ?></td>
                                    <td>
                                        <?php if ($data->validasi == 'aktif') { ?>
                                            <label class="btn bg-green"><i class="fa fa-check-square fa-lg"></i></label>
                                        <?php } else if ($data->validasi == 'tidak_aktif') { ?>
                                            <label class="btn bg-warning">MENUNGGU</label>
                                        <?php } ?>
                                    </td>
                                    <td align="center">
                                        <a class="btn bg-olive" href="<?= base_url('mahasiswa/validasiMahasiswa/' . $data->nim); ?>">
                                            <i class="fa fa-edit fa-lg" title="Edit"></i></a>
                                        <a class="btn bg-orange" href="<?= base_url('mahasiswa/hapusMahasiswa/' . $data->nim); ?>" onclick="return confirm('Yakin?');">
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
</section>