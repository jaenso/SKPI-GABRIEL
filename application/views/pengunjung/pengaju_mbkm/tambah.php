<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card card-info">
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Tambah <?= $title ?></h3>
                            </div>
                            <form method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_user" value="1048">
                                <input type="hidden" name="id_mahasiswa" value="1051">
                                <div style="margin:10px" class="callout callout-success">
                                    <h4>Ketentuan Khusus</h4>
                                    <p>
                                        [1] File Bukti MBKM berformat gambar <b><u> .JPG / .PNG </b></u>
                                    </p>
                                </div>
                                <div class="form-group">
                                    <label>Bentuk Kegiatan</label>
                                    <input required type="text" class="form-control" name="kegmbkm" placeholder="Bentuk Kegiatan MBKM yang diikuti">
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input required type="text" class="form-control" name="ketmbkm" placeholder="Keterangan">
                                </div>
                                <div class="form-group">
                                    <label for="file_akademik">File</label>
                                    <input class="bg-green form-control" type="file" name="file_akademik" id="file_akademik" accept=".jpg, .jpeg, .png" required>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="button" class="btn btn-warning btn-flat" onClick="history.back();">Batalkan</button>
                                </div>
                            </form>

                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!--/.col (left) -->

            </div><!-- /.box-body -->
</section>