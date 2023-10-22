<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card card-info">
                <div class="card-body">
                    <div class="btn-group">
                        &nbsp;<a href="<?= base_url(); ?>akademik/tambah2">
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
                                    <td><?= $data->keterangan ?></td>
                                    <td><?= $data->keterangan ?></td>
                                    <td><?= $data->keterangan ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
</section>