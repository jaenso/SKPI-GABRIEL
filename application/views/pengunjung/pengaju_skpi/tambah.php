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
                                <h3 class="box-title">Tambah <?= $title ?></h3>
                            </div><!-- /.box-header -->
                            <!-- form start -->
                            <form method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_user" value="1048">
                                <input type="hidden" name="id_mahasiswa" value="1051">
                                <div style="margin:10px" class="callout callout-success">
                                    <h4>Ketentuan Khusus</h4>
                                    <p>
                                        [1] Pastikan <b><u>DATA AKADEMIK dan DATA KEIKUTSERTAAN </b></u>telah selesai diinput dan semua bersatatus VALID<br>
                                        [2] Pengajuan SKPI hanya dapat dilakukan 1X, apabila ada kesalahan silahkan hapus pengajuan dan <b><u>AJUKAN BARU KEMBALI</b></u> <br>
                                        [3] Pengajuan SKPI yang berstatus VALID akan<b><u> DIKUNCI SISTEM DAN TIDAK DAPAT DIAJUKAN ULANG</b></u><br>
                                        [4] File Ijazah berformat gambar <b><u> .JPG / .PNG </b></u> untuk memvalidasi Nomor Ijazah yang diinput
                                    </p>
                                </div>
                                <div class="form-group">
                                    <label>Nomor Ijazah</label>
                                    <input required type="text" class="form-control" name="no_ijazah" placeholder="Nomor Ijazah">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lulus</label>
                                    <input required type="date" class="form-control" name="tgl_lulus" placeholder="Tanggal Lulus Kuliah">
                                </div>
                                <div class="form-group">
                                    <label for="file_ijazah">File Ijazah</label>
                                    <input class="bg-green form-control" type="file" name="file_ijazah" id="file_ijazah" accept=".jpg, .jpeg, .png" required>
                                </div>

                                <hr>
                                <div class="box-header with-border">
                                    <h3 class="box-title"><b>Data Akademik (KHS)</b></h3>
                                    <font class="bg-orange">*) Pastikan Data KHS telah LENGKAP DAN VALID sebelum mengajukan pembuatan SKPI</font>
                                </div>

                                <table class="table">
                                    <thead>
                                        <tr align="center">
                                            <th>No.</th>
                                            <th>KHS Semester</th>
                                            <th>Validasi</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan=3>tidak ada data</td>
                                        </tr>
                                    </tbody>
                                </table>


                                <hr>
                                <div class="box-header with-border">
                                    <h3 class="box-title"><b>Data Akademik (MBKM)</b></h3>
                                    <font class="bg-orange">*) Pastikan Informasi MBKM telah LENGKAP DAN VALID sebelum mengajukan pembuatan SKPI</font>
                                </div>

                                <table class="table">
                                    <thead>
                                        <tr align="center">
                                            <th>No.</th>
                                            <th>Bentuk Kegiatan</th>
                                            <th>Validasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan=3>tidak ada data</td>
                                        </tr>
                                    </tbody>
                                </table>


                                <hr>
                                <div class="box-header with-border">
                                    <h3 class="box-title"><b>Daftar Keikutsertaan dalam Organisasi/Kepanitiaan/Pembinaan Mahasiswa</b></h3><br>
                                    <font class="bg-orange">*) Pastikan Informasi Keikutsertaan telah LENGKAP DAN VALID sebelum mengajukan pembuatan SKPI</font>
                                </div>

                                <table class="table">
                                    <thead>
                                        <tr align="center">
                                            <th>No.</th>
                                            <th>Bentuk Kegiatan</th>
                                            <th>Validasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan=3>tidak ada data</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <hr>
                                <div class="box-header with-border">
                                    <h3 class="box-title"><b>Daftar Keikutsertaan dalam Lomba/Prestasi Mahasiswa/Beasiswa</b></h3><br>
                                    <font class="bg-orange">*) Pastikan Informasi Keikutsertaan telah LENGKAP DAN VALID sebelum mengajukan pembuatan SKPI</font>
                                </div>

                                <table class="table">
                                    <thead>
                                        <tr align="center">
                                            <th>No.</th>
                                            <th>Bentuk Kegiatan</th>
                                            <th>Validasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan=3>tidak ada data</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <hr>
                                <div class="box-header with-border">
                                    <h3 class="box-title"><b>Daftar Keikutsertaan dalam Pertemuan Ilmiah/Seminar/Kuliah Umum/Lokakarya</b></h3><br>
                                    <font class="bg-orange">*) Pastikan Informasi Keikutsertaan telah LENGKAP DAN VALID sebelum mengajukan pembuatan SKPI</font>
                                </div>

                                <table class="table">
                                    <thead>
                                        <tr align="center">
                                            <th>No.</th>
                                            <th>Bentuk Kegiatan</th>
                                            <th>Validasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan=3>tidak ada data</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <hr>
                                <div class="box-header with-border">
                                    <h3 class="box-title"><b>Daftar Keikutsertaan dalam Pelatihan/Kursus</b></h3><br>
                                    <font class="bg-orange">*) Pastikan Informasi Keikutsertaan telah LENGKAP DAN VALID sebelum mengajukan pembuatan SKPI</font>
                                </div>

                                <table class="table">
                                    <thead>
                                        <tr align="center">
                                            <th>No.</th>
                                            <th>Bentuk Kegiatan</th>
                                            <th>Validasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan=3>tidak ada data</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <hr>
                                <div class="box-header with-border">
                                    <h3 class="box-title"><b>Daftar Keikutsertaan dalam Kegiatan yang Menunjang Prestasi/Kompetensi/Pengalaman Kerja</b></h3><br>
                                    <font class="bg-orange">*) Pastikan Informasi Keikutsertaan telah LENGKAP DAN VALID sebelum mengajukan pembuatan SKPI</font>
                                </div>

                                <table class="table">
                                    <thead>
                                        <tr align="center">
                                            <th>No.</th>
                                            <th>Bentuk Kegiatan</th>
                                            <th>Validasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan=3>tidak ada data</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <div class="col-xs-12">
                                    <div class="checkbox icheck bg-success">
                                        <label>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" required><i> Data Akademik dan Data Keikutsertaan <b><u>SUDAH LENGKAP DAN VALID</u></b></i>
                                        </label>
                                    </div>
                                </div>
                                <br>
                                <hr>

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Ajukan</button>&nbsp;&nbsp;&nbsp;
                                    <button type="button" class="btn btn-warning btn-flat" onClick="history.back();">Batalkan</button>
                                </div>
                            </form>

                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!--/.col (left) -->

            </div><!-- /.box-body -->
</section><!-- /.content --> <!-- /.content -->