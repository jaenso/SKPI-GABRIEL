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
                        <a href="<?= base_url('mata_kuliah/tambahMataKuliah'); ?>" class="btn btn-block btn-primary btn-flat">Tambah Data</a>
                    </div>
                </div>

                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr align="center">
                                <th width="5%">No.</th>
                                <th width="30%">Data Mata Kuliah</th>
                                <th width="30%">Semester Mata Kuliah</th>
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
                                        <?= $data->mata_kuliah ?><br>
                                    </td>
                                    <td>
                                        <?= $data->semester ?><br>
                                    </td>
                                    <td align="center">
                                        <a class="btn bg-olive" href="<?= base_url('mata_kuliah/editMataKuliah/' . $data->id_matkul); ?>">
                                            <i class="fa fa-edit fa-lg" title="Edit"></i></a>
                                        <a class="btn bg-orange" href="<?= base_url('mata_kuliah/hapusMataKuliah/' . $data->id_matkul); ?>" onclick="return confirm('Yakin?');">
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