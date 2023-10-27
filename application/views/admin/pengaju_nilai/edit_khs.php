<section class="content">
    <div class="row">
        <div class="col-12">
            <!-- /.box -->

            <div class="card card-info">
                <div class="card-body">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Edit Data Pengajuan Input Nilai</h3>
                            </div><!-- /.box-header -->
                            <!-- form start -->
                            <form method="post" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nama Mahasiswa</label>
                                        <input required type="text" class="form-control" name="id_mahasiswa" value="<?= $data['nama'] ?> - <?= $data['nim'] ?>" readonly="readonly">
                                    </div>

                                    <div style="margin:10px" class="callout callout-success">
                                        <h4>Ketentuan Pengajuan</h4>
                                        <p>
                                            [1] Harap diisi sesuai dengan <b><u>DATA DI KHS CETAK DARI BAGIAN AKADEMIK</b></u><br>
                                            [2] File Bukti KHS berformat <b><u> .JPG </b></u>dan Nama file yang dikirim di rename dengan NIM masing-masing. Contoh: DAB119001_KHSsms1, DAB119001_KHSsms2 <br>
                                            [3] Pengajuan yang berstatus VALID <b><u> tidak dapat diubah lagi </b></u>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label>Semester</label>
                                        <input type="text" class="form-control" name="semester" value="<?= $data['semester']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Jumlah Mata Kuliah</label>
                                        <input type="text" class="form-control" name="jml_matkul" value="<?= $data['jml_matkul']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Jumlah SKS yang Diprogramkan</label>
                                        <input type="text" class="form-control" name="jml_sks_program" value="<?= $data['jml_sks_program']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Jumlah SKS yang Lulus</label>
                                        <input type="text" class="form-control" name="jml_sks_lulus" value="<?= $data['jml_sks_lulus']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">File KHS</label>
                                        <input class="bg-green form-control" type="file" name="file_akademik" id="file_akademik" accept=".jpg, .jpeg, .png">
                                        <p class="help-block">Lihat KHS :
                                            <?php if (!empty($data['file_akademik'])) : ?>
                                                <img class="img-responsive pad" src="<?= base_url('uploads/AKADEMIK/' . $data['file_akademik']); ?>" alt="KHS">
                                        </p>
                                    <?php endif; ?> </p>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Validasi</label>
                                        <select name="validasi" required class="form-control">
                                            <option value="BARU" <?= ($data['validasi'] == 'BARU') ? 'selected' : '' ?>>BARU</option>
                                            <option value="VALID" <?= ($data['validasi'] == 'VALID') ? 'selected' : '' ?>>VALID</option>
                                            <option value="TIDAK VALID" <?= ($data['validasi'] == 'TIDAK VALID') ? 'selected' : '' ?>>TIDAK VALID</option>
                                            <option value="TINJAU ULANG" <?= ($data['validasi'] == 'TINJAU ULANG') ? 'selected' : '' ?>>TINJAU ULANG</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <textarea name="ket_validasi" required class="form-control" rows="3" placeholder="Masukan Keterangan"><?= $data['ket_validasi']; ?></textarea>
                                    </div>
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Perbarui</button>
                                        <button type="button" class="btn btn-warning btn-flat" onClick="history.back();">Batalkan</button>
                                    </div>
                            </form>
                        </div><!-- /.box -->

                    </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div><!--/.col (left) -->

        </div><!-- /.box-body -->
</section>