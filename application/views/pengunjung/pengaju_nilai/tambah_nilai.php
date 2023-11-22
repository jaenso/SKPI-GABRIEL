<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="row">
                    <div class="col-6">
                        <div class="card card-primary">
                            <div class="card-header with-border">
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

                                <hr>
                                <hr>

                                <div class="callout callout-warning">
                                    <h4>Perhatian!</h4>
                                    <p>
                                        [1] Harap diisi sesuai dengan <b><u>DATA DI KHS YANG DIUPLOAD</b></u><br>
                                        [2] Data yang sudah berstatus VALID <b><u> tidak dapat diubah lagi </b></u>
                                    </p>
                                </div>

                                <form action="<?= base_url('akademik/simpanNilai/' . $user['username']) ?>" method="post">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add<?= $data['id_khs'] ?>">
                                            Tambah Nilai
                                        </button>
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
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success pull-right">SIMPAN NILAI</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="add<?= $data['id_khs'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Nilai Mata Kuliah</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="<?= base_url('akademik/TambahNilai/' . $data['id_khs'] . '/' . $data['nim']) ?>" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-8">
                                    <select class="form-control" name="id_matkul">
                                        <option value="" disabled selected>Pilih Mata Kuliah</option>
                                        <?php foreach ($mata_kuliah as $mk) : ?>
                                            <option value="<?= $mk->id_matkul ?>"><?= $mk->mata_kuliah ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <select class="form-control" name="nilai">
                                        <option value="A">A</option>
                                        <option value="B+">B+</option>
                                        <option value="B">B</option>
                                        <option value="C+">C+</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-warning btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>