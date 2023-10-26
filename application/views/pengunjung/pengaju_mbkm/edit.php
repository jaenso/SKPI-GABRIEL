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
                                <h3 class="box-title">Edit Data Kegiatan Merdeka Belajar Kampus Merdeka</h3>
                            </div><!-- /.box-header -->
                            <!-- form start -->
                            <form method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_user" value="<?= $user['id_user'] ?>" />
                                <input type="hidden" name="id_mbkm" value="<?= $data['id_mbkm']; ?>">
                                <div class="box-body">

                                    <div style="margin:10px" class="callout callout-success">
                                        <h4>Ketentuan Khusus</h4>
                                        <p>
                                            [1] File Bukti MBKM berformat gambar <b><u> .JPG / .PNG </b></u>
                                        </p>
                                    </div>

                                    <div class="form-group">
                                        <label>Bentuk Kegiatan</label>
                                        <input type="text" class="form-control" name="kegmbkm" value="<?= $data['kegiatan']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <input type="text" class="form-control" name="ketmbkm" value="<?= $data['keterangan']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="file_akademik">File </label>
                                        <input class="bg-green form-control" type="file" name="file_akademik" id="file_akademik" accept=".jpg, .jpeg, .png">
                                        <?php if (!empty($data['file_akademik'])) : ?>
                                            <p class="help-block">Lihat File : <br>
                                                <img class="img-responsive pad w-50" src="<?= base_url('uploads/AKADEMIK/' . $data['file_akademik']); ?>" target="_blank">
                                            </p>
                                        <?php endif; ?>

                                    </div>
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <textarea name="valketmbkm" readonly="readonly" required class="form-control" rows="3"><?= $data['validasi']; ?></textarea>
                                    </div>
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Perbarui</button>&nbsp;&nbsp;&nbsp;
                                        <button type="button" class="btn btn-warning btn-flat" onClick="history.back();">Batalkan</button>
                                    </div>
                            </form>
                        </div><!-- /.box -->

                    </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div><!--/.col (left) -->

        </div><!-- /.box-body -->
</section>