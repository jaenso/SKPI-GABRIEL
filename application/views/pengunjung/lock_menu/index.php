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
                            <form role="form" action="codes/proses_mahasiswa.php?proses=ubah" method="post" enctype="multipart/form-data">
                                <input required type="hidden" name="id_mahasiswa" value="53" />
                                <input required type="hidden" name="id_user" value="49" />
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Nomor Induk Mahasiswa (NIM)</label> <br>
                                        <font size="3px" style="padding:10px;">DAB108066</font>
                                        <input type="hidden" class="form-control" name="nim" value="DAB108066" placeholder="NIM">
                                    </div>

                                    <div class="form-group">
                                        <label>Tahun Angkatan</label>
                                        <select required class="form-control" name="angkatan">
                                            <option value=""></option>
                                            <option value='2023'> 2023 </option>
                                            <option value='2022'> 2022 </option>
                                            <option value='2021'> 2021 </option>
                                            <option value='2020'> 2020 </option>
                                            <option value='2019'> 2019 </option>
                                            <option value='2018'> 2018 </option>
                                            <option value='2017'> 2017 </option>
                                            <option value='2016'> 2016 </option>
                                            <option value='2015'> 2015 </option>
                                            <option value='2014'> 2014 </option>
                                            <option value='2013'> 2013 </option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Mahasiswa</label>
                                        <input required type="text" class="form-control" name="nama" value="FERRY" placeholder="Nama mahasiswa">
                                    </div>
                                    <div class="form-group">
                                        <label>Tempat Lahir</label>
                                        <input required type="text" class="form-control" name="tempat_lahir" value="PALANGKARAYA" placeholder="Tempat Lahir">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="far fa-calendar-alt"></i>
                                                </span>
                                            </div>
                                            <input type="date" name="tgl_lahir" class="form-control float-right">
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
                                            <input type="text" name="no_hp" class="form-control float-right">
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
                                            <input type="email" name="email" class="form-control float-right">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select name="jkel" required class="form-control">
                                            <option value="">--Pilih Jenis Kelamin--</option>
                                            <option value="Pria" selected>Pria</option>
                                            <option value="Wanita">Wanita</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Agama</label>
                                        <select name="agama" required class="form-control">
                                            <option value="1">Islam</option>
                                            <option value=1>Islam</option>
                                            <option value=2>Katholik</option>
                                            <option value=3>Protestan</option>
                                            <option value=4>Hindu</option>
                                            <option value=5>Budha</option>
                                            <option value=6>Khonghucu</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>NIK</label>
                                        <input required type="text" class="form-control" name="nik" value="" placeholder="NIK">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat di Palangka Raya</label>
                                        <input required type="text" class="form-control" name="almparay" value="" placeholder="Alamat di Palangka Raya">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat Asal</label>
                                        <input required type="text" class="form-control" name="almasal" value="" placeholder="Alamat Asal">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Ayah</label>
                                        <input required type="text" class="form-control" name="nmayah" value="" placeholder="Nama Ayah">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Ibu</label>
                                        <input required type="text" class="form-control" name="nmibu" value="" placeholder="Nama Ibu">
                                    </div>


                                    <div class="form-group">
                                        <label>Tanggal Masuk</label><br><i>*diisi sesuai dengan waktu/masa awal masuk perkuliahan pada tahun penerimaan ATAU tanyakan langsung ke Jurusan</i>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="far fa-calendar-alt"></i>
                                                </span>
                                            </div>
                                            <input type="date" name="tglmasuk" class="form-control float-right">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Program Studi</label>
                                        <select name="prodi" required class="form-control">
                                            <option value="1">Teknik Sipil</option>
                                            <option value=1>Teknik Sipil</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Dosen Pembimbing Akademik</label>
                                        <select name="dosen_wali" required class="form-control">
                                            <option value="6">Dr. Rudi Waluyo, S.T., M.T.</option>
                                            <option value=6>Dr. Rudi Waluyo, S.T., M.T.</option>
                                            <option value=7>Veronika Happy Puspasari, S.T., M.T.</option>
                                            <option value=8>Dr. Sutan Parasian Silitonga, S.T.P., S.T.,M.T.</option>
                                            <option value=9>Frieda, S.T, M.T.</option>
                                            <option value=10>Apria Brita Pandohop Gawei, S.T., M.T.</option>
                                            <option value=11>Desi Riani, S.T., M.T.</option>
                                            <option value=12>Dr. Ir. I Made Kamiana, M.T.</option>
                                            <option value=13>Haiki Mart Yupi, S.T., M.T., Ph.D.</option>
                                            <option value=14>Ir. Waluyo Nuswantoro, M.T.</option>
                                            <option value=15>Raden Haryo Saputra, S.T., M.T.</option>
                                            <option value=16>Fransisco Happy Riadi Haputra Baru, S.T., M.Si</option>
                                            <option value=18>Liliana, S.T., M.T</option>
                                            <option value=19>Ir. Maryanto, M.T.</option>
                                            <option value=20>Okta Meilawaty, S.T., M.T.</option>
                                            <option value=22>Robby, S.T., M.T.</option>
                                            <option value=23>Ir. Supiyan, M.T.</option>
                                            <option value=24>Murniati, S.T., M.T.</option>
                                            <option value=25>Ina Elvina, S.T., M.T.</option>
                                            <option value=26>Ir. Salonten, S.T., M.T.</option>
                                            <option value=27>Ir. Desriantomy, M.T.</option>
                                            <option value=28>Ir. Allan Restu Jaya, M.T.</option>
                                            <option value=29>Nomeritae, S.T., M.Eng., Ph.D.</option>
                                            <option value=30>Dwi Anung Nindito, S.T., M.T.</option>
                                            <option value=31>Ir. Hendro Suyanto, M.T.</option>
                                            <option value=32>Mohammad Ikhwan Yani, S.T., M.T.</option>
                                            <option value=34>Okrobianus Hendri , S.T.</option>
                                            <option value=35>Dr. Stephanus Alexsander, S.T., M.T.</option>
                                            <option value=36>Wita Kristiana, S.T., M.T.081349227187</option>
                                            <option value=37>Dewantoro, S.T., M.T.</option>
                                            <option value=38>Almuntofa Purwantoro, S.T., M.T.</option>
                                            <option value=39>Dr. Ir. Subrata Aditama Kittie Aidon Uda, S.T., M.</option>
                                            <option value=40>Lendra, S.T., M.T.</option>
                                            <option value=42>Dr. Ir. Fatma Sarie, S.T., M.T.</option>
                                            <option value=43>Devia, S.T., M.T.</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input required type="password" class="form-control" name="password" value="DAB108066" placeholder="Masukan Password">
                                    </div>
                                    <div class="form-group">
                                        <label>Ulangi Password</label>
                                        <input required type="password" class="form-control" name="password2" value="DAB108066" placeholder="Ulangi Password">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">Foto</label>
                                        <p class="help-block"><img src="<?= base_url(); ?>uploads/itb.png" width="30%"></p>
                                        <input class="bg-aqua form-control" type="file" name="foto" id="exampleInputFile">
                                    </div>

                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Ubah</button>&nbsp;&nbsp;&nbsp;
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