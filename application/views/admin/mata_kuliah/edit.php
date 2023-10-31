<section class="content">
    <div class="row">
        <div class="col-12">
            <!-- /.box -->

            <div class="card card-info">
                <div class="card-body">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Edit Data Pengajuan Input Nilai</h3>
                            </div><!-- /.box-header -->
                            <!-- form start -->
                            <form method="post" enctype="multipart/form-data">
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
                                        <label>Mata Kuliah</label>
                                        <input type="text" class="form-control" name="mata_kuliah" value="<?= $data['mata_kuliah']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Semester</label>
                                        <input required type="text" class="form-control" name="semester" value="<?= $data['semester']; ?>">
                                    </div>
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Perbarui</button>
                                        <button type="button" class="btn btn-warning btn-flat" onClick="history.back();">Batalkan</button>
                                    </div>
                            </form>
                        </div><!-- /.box -->

                    </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div><!--/.col (left) -->

        </div><!-- /.box-body -->
</section>