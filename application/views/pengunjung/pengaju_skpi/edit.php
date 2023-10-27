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
                                <h3 class="box-title">Edit Data Pengajuan SKPI</h3>
                            </div><!-- /.box-header -->
                            <!-- form start -->
                            <form method="post" enctype="multipart/form-data">
                                <input type="hidden" name="idskpi" value="59" />
                                <input type="hidden" name="id_user" value="40" />
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nama Mahasiswa</label>
                                        <input required type="text" class="form-control" name="id_mahasiswa" value="<?= $user['nama']; ?>" readonly="readonly">
                                    </div>

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
                                        <input required type="text" class="form-control" name="no_ijazah" value="<?= $data['nomor_ijazah']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lulus</label>
                                        <input required type="date" class="form-control" name="tgl_lulus" value="<?= $data['tanggal_lulus']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="file_ijazah">File Ijazah</label>
                                        <input class="bg-green form-control" type="file" name="file_ijazah" id="file_ijazah" accept=".jpg, .jpeg, .png">
                                        <?php if (!empty($data['file_ijazah'])) : ?>
                                            <p class="help-block">Lihat File : <br>
                                                <img class="img-responsive pad" src="<?= base_url('uploads/IJAZAH/' . $data['file_ijazah']); ?>" target="_blank">
                                            </p>
                                        <?php endif; ?>
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
                                            <?php
                                            $no = 1;
                                            foreach ($khs as $khs) : ?>
                                                <tr>
                                                    <td>
                                                        <?= $no++ ?>
                                                    </td>
                                                    <td><?= $khs->semester ?></td>
                                                    <td> <label class="btn bg-warning"><?= $khs->validasi ?></label>
                                                    </td>
                                                    <td><?= $khs->ket_validasi ?></td>
                                                </tr>
                                                <!-- <tr>
                                                <td colspan=3>tidak ada data</td>
                                            </tr> -->
                                            <?php endforeach ?>
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
                                            <?php
                                            $no = 1;
                                            foreach ($mbkm as $mbkm) : ?>
                                                <tr>
                                                    <td>
                                                        <?= $no++ ?>
                                                    </td>
                                                    <td><?= $mbkm->kegiatan ?></td>
                                                    <td> <label class="btn bg-warning"><?= $mbkm->validasi ?></label>
                                                    </td>
                                                </tr>
                                                <!-- <tr>
                                                <td colspan=3>tidak ada data</td>
                                            </tr> -->
                                            <?php endforeach ?>
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
                                            <?php
                                            $no = 1;
                                            foreach ($organisasi as $pts) : ?>
                                                <tr>
                                                    <td>
                                                        <?= $no++ ?>
                                                    </td>
                                                    <td><?= $pts->kegiatan ?></td>
                                                    <td> <label class="btn bg-warning"><?= $pts->validasi ?></label>
                                                    </td>
                                                </tr>
                                                <!-- <tr>
                                                <td colspan=3>tidak ada data</td>
                                            </tr> -->
                                            <?php endforeach ?>
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
                                            <?php
                                            $no = 1;
                                            foreach ($prestasi as $ogs) : ?>
                                                <tr>
                                                    <td>
                                                        <?= $no++ ?>
                                                    </td>
                                                    <td><?= $ogs->kegiatan ?></td>
                                                    <td> <label class="btn bg-warning"><?= $ogs->validasi ?></label>
                                                    </td>
                                                </tr>
                                                <!-- <tr>
                                                <td colspan=3>tidak ada data</td>
                                            </tr> -->
                                            <?php endforeach ?>
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
                                            <?php
                                            $no = 1;
                                            foreach ($pertemuan as $ptm) : ?>
                                                <tr>
                                                    <td>
                                                        <?= $no++ ?>
                                                    </td>
                                                    <td><?= $ptm->kegiatan ?></td>
                                                    <td> <label class="btn bg-warning"><?= $ptm->validasi ?></label>
                                                    </td>
                                                </tr>
                                                <!-- <tr>
                                                <td colspan=3>tidak ada data</td>
                                            </tr> -->
                                            <?php endforeach ?>
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
                                            <?php
                                            $no = 1;
                                            foreach ($pelatihan as $plt) : ?>
                                                <tr>
                                                    <td>
                                                        <?= $no++ ?>
                                                    </td>
                                                    <td><?= $plt->kegiatan ?></td>
                                                    <td> <label class="btn bg-warning"><?= $plt->validasi ?></label>
                                                    </td>
                                                </tr>
                                                <!-- <tr>
                                                <td colspan=3>tidak ada data</td>
                                            </tr> -->
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>

                                    <hr>
                                    <div class="box-header with-border">
                                        <h3 class="box-title"><b>Daftar Keikutsertaan dalam Kegiatan yang Menunjang Prestasi/Kompetensi/Pengalaman Kerja/Jurnal/Prosiding</b></h3><br>
                                        <font class="bg-orange">*) Pastikan Informasi Keikutsertaan telah LENGKAP DAN VALID sebelum mengajukan pembuatan SKPI</font>
                                    </div>

                                    <table class="table">
                                        <thead>
                                            <tr align="center">
                                                <th>No.</th>
                                                <th>Bentuk Kegiatan/Nama Jurnal/Prosiding</th>
                                                <th>Validasi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($penunjang as $pnj) : ?>
                                                <tr>
                                                    <td>
                                                        <?= $no++ ?>
                                                    </td>
                                                    <td><?= $pnj->kegiatan ?></td>
                                                    <td> <label class="btn bg-warning"><?= $pnj->validasi ?></label>
                                                    </td>
                                                </tr>
                                                <!-- <tr>
                                                <td colspan=3>tidak ada data</td>
                                            </tr> -->
                                            <?php endforeach ?> </tr>
                                        </tbody>
                                    </table>


                                    <hr>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Validasi</label>
                                        <select name="valskpi" required class="form-control">
                                            <option value="BARU">BARU</option>
                                            <option value="VALID" Selected>VALID</option>
                                            <option value="TIDAK VALID">TIDAK VALID</option>
                                            <option value="TINJAU ULANG">TINJAU ULANG</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <textarea name="valketskpi" required class="form-control" rows="3" placeholder="Masukan Keterangan">ok</textarea>
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