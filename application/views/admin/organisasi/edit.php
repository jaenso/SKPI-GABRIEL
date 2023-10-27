<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card card-info">
                <div class="card-body">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Edit Data Keikutsertaan <?= $deskripsi ?></h3>
                            </div><!-- /.box-header -->
                            <!-- form start -->
                            <form method="post" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nama Mahasiswa</label>
                                        <input required type="text" class="form-control" name="id_mahasiswa" value="<?= $data['nama'] ?> - <?= $data['nim'] ?>" readonly="readonly">
                                    </div>
                                    <div style="margin:10px" class="callout callout-success">
                                        <h4>Ketentuan Khusus</h4>
                                        <p>
                                            [1] Keikutsertaan <?= $deskripsi ?> adalah yang <b><u>DIPEROLEH SELAMA MENJADI MAHASISWA</b></u><br>
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
                                        <input type="text" class="form-control" name="no_sertifikat" value="<?= $data['no_sertifikat']; ?>">
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
                                        <input class="bg-green form-control" type="file" name="file_sertifikat" id="file_sertifikat" accept=".pdf ">
                                        <?php if (!empty($data['file_sertifikat'])) : ?>
                                            <p class="help-block">Lihat Sertifikat : <a href="<?= base_url('uploads/SERTIFIKAT/' . $data['file_sertifikat']); ?>" target="_blank"><?= $data['file_sertifikat']; ?></a></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Validasi</label>
                                        <select name="validasi" required class="form-control">
                                            <option value="BARU" <?= ($data['validasi'] == 'BARU') ? 'selected' : '' ?>>BARU</option>
                                            <option value="VALID" <?= ($data['validasi'] == 'VALID') ? 'selected' : '' ?>>VALID</option>
                                            <option value="TIDAK VALID" <?= ($data['validasi'] == 'TIDAK VALID') ? 'selected' : '' ?>>TIDAK VALID</option>
                                        </select>
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