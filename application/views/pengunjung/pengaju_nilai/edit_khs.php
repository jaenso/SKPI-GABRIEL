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
                                <input type="hidden" name="id_user" value="<?= $user['id_user'] ?>" />
                                <input type="hidden" name="id_nilai" value="<?= $data['id_khs']; ?>">
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
                                        <label>Semester</label>
                                        <input type="text" class="form-control" name="smt" value="<?= $data['semester']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Jumlah Mata Kuliah</label>
                                        <input type="text" class="form-control" name="jml_matkul" value="<?= $data['jml_matkul']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Jumlah SKS yang Diprogramkan</label>
                                        <input type="text" class="form-control" name="sks_beban" value="<?= $data['jml_sks_program']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Jumlah SKS yang Lulus</label>
                                        <input type="text" class="form-control" name="sks_lulus" value="<?= $data['jml_sks_lulus']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">File KHS</label>
                                        <input class="bg-green form-control" type="file" name="file_khs" id="file_khs">
                                        <p class="help-block">Lihat KHS :
                                            <!--<a href="codes/khs/38akhirnya_29.pdf" target="_blank">38akhirnya_29.pdf</a>-->
                                            <img class="img-responsive pad" src="codes/khs/38akhirnya_29.pdf" target="_blank">
                                        </p>
                                    </div>
                                    <input type="hidden" name="valdn" value="BARU">
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <textarea name="valketdn" readonly="readonly" required class="form-control" rows="3"><?= $data['keterangan']; ?></textarea>
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