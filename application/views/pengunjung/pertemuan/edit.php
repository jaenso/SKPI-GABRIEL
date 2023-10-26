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
                                <h3 class="box-title">Edit Data Keikutsertaan Organisasi/Kepanitiaan/Pembinaan Mahasiswa</h3>
                            </div><!-- /.box-header -->
                            <!-- form start -->
                            <form method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_user" value="<?= $user['id_user'] ?>" />
                                <input type="hidden" name="id_kegiatan" value="<?= $data['id_kegiatan']; ?>">
                                <div class="box-body">

                                    <div style="margin:10px" class="callout callout-success">
                                        <h4>Ketentuan Khusus</h4>
                                        <p>
                                            [1] Keikutsertaan Organisasi/Kepanitiaan/Pembinaan Mahasiswa adalah yang <b><u>DIPEROLEH SELAMA MENJADI MAHASISWA</b></u><br>
                                            [2] Dapat diajukan lebih dari satu sertifikat, dan <b><u>MAKSIMAL 7 SERTIFIKAT</b></u> yang dianggap <b><u>TERBAIK</b></u><br>
                                            [3] File Bukti Sertifikat berformat <b><u> .pdf </b></u>
                                        </p>
                                    </div>

                                    <div class="form-group">
                                        <label>Bentuk Kegiatan</label>
                                        <input type="text" class="form-control" name="kegiatan" value="<?= $data['kegiatan']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Jabatan</label>
                                        <input type="text" class="form-control" name="peran" value="<?= $data['peran']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>No. Sertifikat/Surat</label>
                                        <input type="text" class="form-control" name="nomor" value="<?= $data['no_sertifikat']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Penyelenggara</label>
                                        <input type="text" class="form-control" name="penyelenggara" value="<?= $data['penyelenggara']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Waktu/Periode</label>
                                        <input type="text" class="form-control" name="periode" value="<?= $data['periode']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="file_sertifikat">File Sertifikat</label>
                                        <input class="bg-green form-control" type="file" name="file_sertifikat" id="file_sertifikat">
                                        <p class="help-block">Lihat Sertifikat : <a href="codes/sertifikat/89Screenshot_38.png" target="_blank">89Screenshot_38.png</a></p>
                                    </div>
                                    <input type="hidden" name="val_k1" value="TINJAU ULANG">
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <textarea name="keterangan" readonly="readonly" required class="form-control" rows="3"><?= $data['ket_validasi']; ?></textarea>
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