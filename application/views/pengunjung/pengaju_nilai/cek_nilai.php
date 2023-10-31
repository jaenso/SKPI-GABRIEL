<section class="content">
    <div class="row">
        <div class="col-6">
            <div class="card card-primary">
                <div class="card-header with-border">
                    <b>
                        <h2 class="card-title">File Upload KHS Semester <?= $data['semester']; ?></h2>
                    </b>
                </div>
                <img class="img-responsive pad" src="<?= base_url('uploads/AKADEMIK/' . $data['file_akademik']); ?>" alt="KHS">
                <p>Jumlah Mata Kuliah: <?= $data['jml_matkul']; ?></p>
                <p>Jumlah SKS yang Diprogramkan: <?= $data['jml_sks_program']; ?></p>
                <p>Jumlah SKS Lulus: <?= $data['jml_sks_lulus']; ?></p>
            </div>
        </div>

        <div class="col-6">
            <div class="card card-primary">
                <div class="card-header with-border">
                    <h2 class="card-title">Input Nilai berdasarkan KHS</h2>
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
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="col-6">Nilai Mutu</label>
                                <div class="col-12">
                                    <select name="id_matkul[]" class="form-select" id="mata_kuliah" style="width: 100%;" required>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>