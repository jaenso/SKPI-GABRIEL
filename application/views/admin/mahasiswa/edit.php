<section class="content">
    <div class="col-6">
        <div class="card card-primary">
            <div class="callout callout-success">
                <h4>Apakah mahasiswa ini benar mahasiswa <?= $data['prodi'] ?>?</h4>
            </div>
            <form method="post">
                <div class="card-body">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button class="btn btn-secondary">NIM</button>
                        </div>
                        <input required type="text" class="form-control" name="nim" value="<?= $data['nim']; ?>" disabled="disabled">
                    </div>
                    <br>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button class="btn btn-secondary">Nama</button>
                        </div>
                        <input required type="text" class="form-control" name="nama" value="<?= $data['nama']; ?>" disabled="disabled">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon">Foto</span>
                        <p class="help-block"><img src="<?= base_url('uploads/MAHASISWA/' . $data['foto']); ?>" width="30%"></p>
                    </div>
                </div>
                <br>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button class="btn btn-success">Validasi</button>
                    </div>
                    <select name="validasi" required class="form-control">
                        <option value="aktif" <?= ($data['validasi'] == 'SETUJU') ? 'selected' : '' ?>>SETUJU</option>
                        <option value="tidak_aktif" <?= ($data['validasi'] == 'TOLAK') ? 'selected' : '' ?>>TOLAK</option>
                    </select>
                </div>
                <br>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Kirim</button>&nbsp;&nbsp;&nbsp;
                    <button type="button" class="btn btn-warning btn-flat" onClick="history.back();">Batalkan</button>
                </div>
            </form>
        </div>
    </div>
</section>