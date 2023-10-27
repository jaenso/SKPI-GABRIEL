<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header with-border">
                    <b>
                        <h2 class="card-title">File Upload KHS Semester 7</h2>
                    </b>
                </div>
                <?php if (!empty($data['file_akademik'])) : ?>
                    <img class="img-responsive pad" src="<?= base_url('uploads/AKADEMIK/' . $data['file_akademik']); ?>" alt="KHS">
                    </p>
                <?php endif; ?> </p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card card-info">
                <div class="card-header with-border">
                    <h3 class="card-title">Input Nilai berdasarkan KHS</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">NAMA</label>
                        <div class="col-sm-10">
                            <label for="inputEmail3" class="col-sm-8 control-label"><?= $user['nama']; ?></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Semester</label>
                        <div class="col-sm-10">
                            <label for="inputEmail3" class="col-sm-8 control-label"><?= $data['semester']; ?></label>
                        </div>
                    </div>

                    <hr>
                    <hr>

                    <div class="callout callout-warning">
                        <h4>Perhatian!</h4>
                        <p>
                            [1] Harap diisi sesuai dengan <b><u>DATA DI KHS YANG DIUPLOAD</u></b><br>
                            [2] Data yang sudah berstatus VALID <b><u>tidak dapat diubah lagi</u></b>
                        </p>
                    </div>

                    <form class="form-horizontal" method="post">
                        <input type="hidden" class="form-control" name="iddn" value="4437" readonly>
                        <input type="hidden" class="form-control" name="jummatkul" value="5" readonly>
                        <input type="hidden" class="form-control" name="idnilai" value="30289" readonly>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Mata Kuliah</label>
                            <div class="col-sm-10">
                                <select name="idmatkul[]" required class="form-control select2">
                                    <option value="1">PANCASILA</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nilai Mutu</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="nilaimatkul[]" required>
                                    <option value="A">A</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox" required> Nilai yang dimasukkan <b><u>SUDAH SESUAI</u></b> dengan KHS Akademik
                                </label>
                            </div>
                        </div><!-- /.col -->

                </div><!-- /.box-body -->
                <div class="box-footer">
                    <button type="button" class="btn btn-warning btn-flat" onClick="history.back();">Kembali</button>
                    <button type="submit" class="btn btn-success pull-right">SIMPAN NILAI</button>
                </div><!-- /.box-footer -->
                </form>
            </div>
        </div>
    </div>
    </div>
</section>