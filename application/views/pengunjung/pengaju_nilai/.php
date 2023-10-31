<section class="content">
    <div class="row">
        <div class="col-6">
            <div class="card card-primary">
                <div class="card-header with-border">
                    <b>
                        <h2 class="card-title">File Upload KHS Semester 7</h2>
                    </b>
                </div>
                <?php if (!empty($data['file_akademik'])) : ?>
                    <img class="img-responsive pad" src="<?= base_url('uploads/AKADEMIK/' . $data['file_akademik']); ?>" alt="KHS">
                <?php endif; ?>
            </div>
        </div>

        <div class="col-6">
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
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="col-6">Mata Kuliah</label>
                                <div class="col-12">
                                    <select name="id_matkul[]" class="form-select" id="mata_kuliah" style="width: 100%;" required>
                                        <option value=""></option>
                                        <?php foreach ($matkul as $matkul) : ?>
                                            <option value="<?= $matkul->id_matkul; ?>"><?= $matkul->mata_kuliah; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="col-6">Nilai Mutu</label>
                                <div class="col-12">
                                    <select name="nilaimatkul[]" class="form-select" id="nilai" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="A">A</option>
                                        <option value="B+">B+</option>
                                        <option value="B">B</option>
                                        <option value="B-">B-</option>
                                        <option value="C+C">C+</option>
                                        <option value="C">C</option>
                                        <option value="C-">C-</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" required> Nilai yang dimasukkan <b><u>SUDAH SESUAI</u></b> dengan KHS Akademik
                        </label>
                    </div>
                </div><!-- /.card-body -->
                <div class="card-footer">
                    <button type="button" class="btn btn-warning btn-flat" onClick="history.back();">Kembali</button>
                    <button type="submit" class="btn btn-success pull-right">SIMPAN NILAI</button>
                </div><!-- /.card-footer -->
            </div>
        </div>
    </div>
</section>