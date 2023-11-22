<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card card-info">
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Tambah Data Pengajuan Input Nilai</h3>
                            </div>
                            <form method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Mata Kuliah</label>
                                    <input required type="text" class="form-control" name="mata_kuliah" placeholder="Masukkan mata kuliah">
                                </div>
                                <div class="form-group">
                                    <label>Semester</label>
                                    <input required type="text" class="form-control" name="semester" placeholder="Masukkan semester dari mata kuliah">
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                    <button type="button" class="btn btn-warning btn-flat" onClick="history.back();">Batalkan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>