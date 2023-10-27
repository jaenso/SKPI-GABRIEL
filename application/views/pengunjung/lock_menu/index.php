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
                            <!-- form start -->
                            <form method="post" enctype="multipart/form-data">
                                <input required type="hidden" name="id_mahasiswa" value="53" />
                                <input required type="hidden" name="id_user" value="49" />
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Nomor Induk Mahasiswa (NIM)</label> <br>
                                        <input required type="text" class="form-control" name="nim" value="<?= $mhs['nim']; ?>" placeholder="Nama mahasiswa">
                                    </div>

                                    <div class="form-group">
                                        <label for="angkatan">Tahun Angkatan</label>
                                        <select required class="form-control" name="angkatan" id="angkatan">
                                            <option value="<?= $mhs['angkatan']; ?>"><?= $mhs['angkatan']; ?></option>
                                            <option value='2023'>2023</option>
                                            <option value='2022'>2022</option>
                                            <option value='2021'>2021</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Mahasiswa</label>
                                        <input required type="text" class="form-control" name="nama" value="<?= $mhs['nama']; ?>" placeholder="Nama mahasiswa">
                                    </div>
                                    <div class="form-group">
                                        <label>Tempat Lahir</label>
                                        <input required type="text" class="form-control" name="tempat_lahir" value="<?= $mhs['tempat_lahir']; ?>" placeholder="Tempat Lahir">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="far fa-calendar-alt"></i>
                                                </span>
                                            </div>
                                            <input type="date" name="tgl_lahir" value="<?= $mhs['tgl_lahir']; ?>" class="form-control float-right">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor Ponsel</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-phone"></i>
                                                </span>
                                            </div>
                                            <input type="text" name="no_hp" class="form-control float-right" value="<?= $mhs['no_hp']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                            </div>
                                            <input type="email" name="email" class="form-control float-right" value="<?= $mhs['email']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select name="kelamin" required class="form-control">
                                            <option value="<?= $mhs['kelamin']; ?>">--Pilih Jenis Kelamin--</option>
                                            <option value="Pria" selected>Pria</option>
                                            <option value="Wanita">Wanita</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Agama</label>
                                        <select required class="form-control" name="agama" id="agama">
                                            <option value="<?= $mhs['agama']; ?>"><?= $mhs['agama']; ?></option>
                                            <option value="Protestan">Protestan</option>
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
                                        <input required type="text" class="form-control" name="alamat_asal" value="<?= $mhs['alamat_asal']; ?>" placeholder="Alamat Asal">
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
                                        <label>Tanggal Masuk</label><br><i>*diisi sesuai dengan waktu/masa awal masuk perkuliahan pada tahun penerimaan ATAU tanyakan langsung ke Jurusan</i>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="far fa-calendar-alt"></i>
                                                </span>
                                            </div>
                                            <input type="date" name="tglmasuk" value="<?= $mhs['tgl_masuk']; ?>" class="form-control float-right">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Program Studi</label>
                                        <select name="prodi" value="<?= $mhs['prodi']; ?>" required class="form-control">
                                            <option value="Teknik Sipil">Teknik Sipil</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Dosen Pembimbing Akademik</label>
                                        <select required class="form-control" name="dosen_pa" id="dosen_pa">
                                            <option value="<?= $mhs['dosen_pa']; ?>"><?= $mhs['dosen_pa']; ?></option>
                                            <option value='Dr. Rudi Waluyo, S.T., M.T.'>Dr. Rudi Waluyo, S.T., M.T.</option>
                                        </select>
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
                        </div><!-- /.box -->

                    </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div><!--/.col (left) -->

        </div><!-- /.box-body -->
    </div><!-- /.box -->
    </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content --> <!-- /.content -->