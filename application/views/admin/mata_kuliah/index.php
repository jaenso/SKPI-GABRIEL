<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card card-info">
                <div class="card-body">
                    <div class="btn-group">
                        &nbsp;<a href="<?= base_url('mata_kuliah/tambahMatkulAdmin'); ?>">
                            <button class="btn btn-block btn-primary btn-flat">Tambah Data </button>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr align="center">
                                <th>No.</th>
                                <th>Mata Kuliah</th>
                                <th>Semester</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data as $data) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data->mata_kuliah ?></td>
                                    <td><?= $data->semester ?></td>
                                    <td align="center">
                                        <a class="btn bg-olive" href="<?= base_url('mata_kuliah/editMatkulAdmin/' . $data->id_matkul); ?>">
                                            <i class="fa fa-edit fa-lg" title="Edit"></i>
                                        </a>
                                        <a class="btn bg-orange" href="<?= base_url('mata_kuliah/hapusMatkulAdmin/' . $data->id_matkul); ?>" onclick="return confirm('Yakin?');">
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