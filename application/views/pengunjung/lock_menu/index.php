<section class="content">
    <div class="card card-info">
        <div class="card-body">
            <form method="post" enctype="multipart/form-data">
                <input required type="hidden" name="id_mahasiswa" value="53" />
                <input required type="hidden" name="id_user" value="49" />
                <div class="box-body">
                    <div class="form-group">
                        <label>Nomor Induk Mahasiswa (NIM)</label>
                        <input required type="text" class="form-control" name="nim" value="<?= $mhs['nim']; ?>" placeholder="NIM">
                    </div>

                    <div class="form-group">
                        <label for="angkatan">Tahun Angkatan</label>
                        <select required class="form-control" name="angkatan" id="angkatan">
                            <option value="<?= $mhs['angkatan']; ?>"><?= $mhs['angkatan']; ?></option>
                            <option value='2025'>2025</option>
                            <option value='2024'>2024</option>
                            <option value='2023'>2023</option>
                            <option value='2022'>2022</option>
                            <option value='2021'>2021</option>
                            <option value='2020'>2020</option>
                            <option value='2019'>2019</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Nama Mahasiswa</label>
                        <input required type="text" class="form-control" name="nama" value="<?= $mhs['nama']; ?>" placeholder="Nama Mahasiswa">
                    </div>

                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input required type="text" class="form-control" name="tempat_lahir" value="<?= $mhs['tempat_lahir']; ?>" placeholder="Tempat Lahir">
                    </div>

                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" value="<?= $mhs['tgl_lahir']; ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Nomor Ponsel</label>
                        <input type="text" name="no_hp" class="form-control" value="<?= $mhs['no_hp']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="<?= $mhs['email']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select name="kelamin" required class="form-control">
                            <option value="Pria" selected>Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Agama</label>
                        <select required class="form-control" name="agama">
                            <option value="Protestan">Protestan</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Islam">Islam</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>NIK</label>
                        <input required type="text" class="form-control" name="nik" value="<?= $mhs['nik']; ?>" placeholder="NIK">
                    </div>

                    <div class="form-group">
                        <label>Alamat di Palangka Raya</label>
                        <input required type="text" class="form-control" name="alamat_pky" value="<?= $mhs['alamat_pky']; ?>" placeholder="Alamat di Palangka Raya">
                    </div>

                    <div class="form-group">
                        <label>Alamat Asal</label>
                        <input required type="text" class "form-control" name="alamat_asal" value="<?= $mhs['alamat_asal']; ?>" placeholder="Alamat Asal">
                    </div>

                    <div class="form-group">
                        <label>Nama Ayah</label>
                        <input required type="text" class="form-control" name="ayah" value="<?= $mhs['ayah']; ?>" placeholder="Nama Ayah">
                    </div>

                    <div class="form-group">
                        <label>Nama Ibu</label>
                        <input required type="text" class="form-control" name="ibu" value="<?= $mhs['ibu']; ?>" placeholder="Nama Ibu">
                    </div>

                    <div class="form-group">
                        <label>Tanggal Masuk</label>
                        <input type="date" name="tglmasuk" value="<?= $mhs['tgl_masuk']; ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Program Studi</label>
                        <select name="prodi" value="<?= $mhs['prodi']; ?>" required class="form-control">
                            <option value="Arsitek">Arsitek</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Dosen Pembimbing Akademik</label>
                        <input type="text" name="dosen_pa" value="<?= $mhs['dosen_pa']; ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input class="bg-aqua form-control" type="file" name="foto" id="foto">
                        <?php if (!empty($mhs['foto'])) { ?>
                            <p class="help-block"><img src="<?= base_url('uploads/MAHASISWA/' . $mhs['foto']); ?>" width="30%"></p>
                        <?php } else { ?>
                            <p class="help-block"><img src="<?= base_url('uploads/MAHASISWA/default.jpg'); ?>" width="30%"></p>
                        <?php } ?>
                    </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Ubah</button>
                    <button type="button" class="btn btn-warning btn-flat" onClick="history.back();">Batalkan</button>
                </div>
            </form>
        </div>
    </div>
</section>