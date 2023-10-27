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
                            <label for="inputEmail3" class="col-sm-8 control-label"><?= $data['nim']; ?> - <?= $data['nama']; ?></label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Semester</label>
                        <div class="col-sm-10">
                            <label for="inputEmail3" class="col-sm-8 control-label"><?= $data['semester']; ?></label>
                        </div>
                    </div>

                    <div class="callout callout-warning">
                        <h4>Perhatian!</h4>
                        <p>
                            [1] Harap diisi sesuai dengan <b><u>DATA DI KHS YANG DIUPLOAD</u></b><br>
                            [2] Data yang sudah berstatus VALID <b><u>tidak dapat diubah lagi</u></b>
                        </p>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-8">
                            <h5 class="box-title">Mata Kuliah</h5>
                        </div>
                        <div class="col-sm-3">
                            <h5 class="box-title">Nilai Mutu</h5>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="KEWARGANEGARAAN" readonly>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" value="B" readonly>
                        </div>
                    </div>

                    <!-- Add more Mata Kuliah and Nilai Mutu rows here -->

                </div>

                <div class="box-footer">
                    <button type="button" class="btn bg-yellow btn-flat" onClick="history.back();">Kembali</button>
                    <button class="btn btn-success pull-right">NILAI VALID <i class="fa fa-check-square-o fa-lg"></i></button>
                </div>
            </div>
        </div>

    </div>
</section>