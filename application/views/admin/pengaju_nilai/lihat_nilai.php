<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="row">
                    <div class="col-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h2 class="card-title">File Upload KHS Semester <?= $data['semester'] ?></h2>
                            </div>
                            <img class="img-responsive pad w-50" src="<?= base_url('uploads/AKADEMIK/' . $data['file_akademik']); ?>" alt="KHS">
                            <div class="card-body">
                                <p>Jumlah Mata Kuliah: <?= $data['jml_matkul'] ?></p>
                                <p>Jumlah SKS Yang Diprogramkan: <?= $data['jml_sks_program'] ?></p>
                                <p>Jumlah SKS Yang Lulus: <?= $data['jml_sks_lulus'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Input Nilai berdasarkan KHS</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">NAMA</label>
                                    <div class="col-sm-10">
                                        <label class="col-sm-8 control-label"><?= $data['nim'] ?> - <?= $data['nama'] ?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Semester</label>
                                    <div class="col-sm-10">
                                        <label class="col-sm-8 control-label"><?= $data['semester'] ?></label>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-8">
                                        <h5 class="card-title">Mata Kuliah</h5>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5 class="card-title">Nilai Mutu</h5>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <?php foreach ($penilaian as $pl) : ?>
                                        <div class="row mb-3">
                                            <div class="col-sm-8">
                                                <input disabled type="text" class="form-control" value="<?= $pl->mata_kuliah ?>">
                                            </div>
                                            <div class="col-sm-3">
                                                <input disabled type="text" class="form-control" value="<?= $pl->nilai ?>">
                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>