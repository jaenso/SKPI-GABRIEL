<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header with-border">
                    <b>
                        <h2 class="card-title">File Upload KHS Semester 7</h2>
                    </b>
                </div>
                <img class="img-responsive pad" src="codes/khs/38akhirnya_29.pdf">
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

                    <div class="form-group">
                        <div class="col-sm-8">
                            <h5 class="box-title">Mata Kuliah</h5>
                        </div>
                        <div class="col-sm-3">
                            <h5 class="box-title">Nilai Mutu</h5>
                        </div>
                    </div>

                    <form class="form-horizontal" role="form" action="codes/proses_pengajuannilai.php?proses=updatenilai" method="post">
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

                        <div class="form-group">
                            <div class="col-xs-11">
                                <button type="submit" class="btn bg-purple pull-right">UPDATE NILAI</button>
                            </div>
                        </div>
                    </form>

                    <div class="box-footer">
                        <button type="button" class="btn bg-yellow btn-flat" onClick="history.back();">Kembali</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>