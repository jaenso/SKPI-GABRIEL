<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card card-info">
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Edit Data Pengajuan Input Nilai</h3>
                            </div>
                            <form method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_nilai" value="<?= $data['id_khs']; ?>">
                                <div class="box-body">
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
                                        <?php if (!empty($data['file_akademik'])) : ?>
                                            <p class="help-block">Lihat KHS :
                                                <img class="img-responsive pad w-50" src="<?= base_url('uploads/AKADEMIK/' . $data['file_akademik']); ?>" alt="KHS">
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                    <input type="hidden" name="valdn" value="BARU">
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <textarea name="valketdn" readonly="readonly" required class="form-control" rows="3"><?= $data['ket_validasi']; ?></textarea>
                                    </div>
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Perbarui</button>
                                        <button type="button" class="btn btn-warning btn-flat" onClick="history.back();">Batalkan</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>