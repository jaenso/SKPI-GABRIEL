<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card card-info">
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Edit Data Kegiatan Merdeka Belajar Kampus Merdeka</h3>
                            </div>
                            <form method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nama Mahasiswa</label>
                                    <input required type="text" class="form-control" name="id_mahasiswa" value="<?= $data['nama'] ?> - <?= $data['nim'] ?>" readonly>
                                </div>
                                <div class="box-body">
                                    <div style="margin:10px" class="callout callout-success">
                                        <h4>Ketentuan Khusus</h4>
                                        <p>
                                            [1] File Bukti MBKM berformat gambar <b><u> .JPG / .PNG </b></u>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label>Bentuk Kegiatan</label>
                                        <input type="text" class="form-control" name="kegmbkm" value="<?= $data['kegiatan']; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <input type="text" class="form-control" name="ketmbkm" value="<?= $data['keterangan']; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="file_mbkm">File </label>
                                        <p class="help-block">Lihat File : <br>
                                            <?php if (!empty($data['file_akademik'])) : ?>
                                                <img class="img-responsive pad" src="<?= base_url('uploads/AKADEMIK/' . $data['file_akademik']); ?>" alt="KHS">
                                        </p>
                                    <?php endif; ?> </p>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Validasi</label>
                                        <select name="validasi" required class="form-control">
                                            <option value="BARU" <?= ($data['validasi'] == 'BARU') ? 'selected' : '' ?>>BARU</option>
                                            <option value="VALID" <?= ($data['validasi'] == 'VALID') ? 'selected' : '' ?>>VALID</option>
                                            <option value="TIDAK VALID" <?= ($data['validasi'] == 'TIDAK VALID') ? 'selected' : '' ?>>TIDAK VALID</option>
                                            <option value="TINJAU ULANG" <?= ($data['validasi'] == 'TINJAU ULANG') ? 'selected' : '' ?>>TINJAU ULANG</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <textarea name="ket_validasi" required class="form-control" rows="3" placeholder="Masukan Keterangan"><?= $data['ket_validasi']; ?></textarea>
                                    </div>
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Perbarui</button>&nbsp;&nbsp;&nbsp;
                                        <button type="button" class="btn btn-warning btn-flat" onClick="history.back();">Batalkan</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>