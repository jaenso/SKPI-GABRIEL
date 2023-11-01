<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card card-info">
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Edit Data Pengajuan SKPI</h3>
                            </div>
                            <form method="post" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nama Mahasiswa</label>
                                        <input required type="text" class="form-control" name="id_mahasiswa" value="<?= $data['nim']; ?> - <?= $data['nama']; ?>" readonly="readonly">
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
                                        <input required type="text" class="form-control" name="no_ijazah" value="<?= $data['nomor_ijazah']; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lulus</label>
                                        <input required type="date" class="form-control" name="tgl_lulus" value="<?= $data['tanggal_lulus']; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="file_ijazah">File Ijazah</label>
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
                                                    <td>
                                                        <?php if ($khs->validasi == 'VALID') { ?>
                                                            <label class="btn bg-green"><?= $khs->validasi ?> <i class="fa fa-check-square fa-lg"></i></label>
                                                        <?php } else if ($khs->validasi == 'TIDAK VALID') { ?>
                                                            <label class="btn bg-danger"><?= $khs->validasi ?></label>
                                                        <?php } else if ($khs->validasi == 'BARU') { ?>
                                                            <label class="btn bg-blue"><?= $khs->validasi ?></label>
                                                        <?php } else if ($khs->validasi == 'TINJAU ULANG') { ?>
                                                            <label class="btn bg-warning"><?= $khs->validasi ?></label>
                                                        <?php } ?>
                                                    </td>
                                                    <td><?= $khs->ket_validasi ?></td>
                                                </tr>
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
                                                    <td>
                                                        <?php if ($mbkm->validasi == 'VALID') { ?>
                                                            <label class="btn bg-green"><?= $mbkm->validasi ?> <i class="fa fa-check-square fa-lg"></i></label>
                                                        <?php } else if ($mbkm->validasi == 'TIDAK VALID') { ?>
                                                            <label class="btn bg-danger"><?= $mbkm->validasi ?></label>
                                                        <?php } else if ($mbkm->validasi == 'BARU') { ?>
                                                            <label class="btn bg-blue"><?= $mbkm->validasi ?></label>
                                                        <?php } else if ($mbkm->validasi == 'TINJAU ULANG') { ?>
                                                            <label class="btn bg-warning"><?= $mbkm->validasi ?></label>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
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
                                            foreach ($organisasi as $ogn) : ?>
                                                <tr>
                                                    <td>
                                                        <?= $no++ ?>
                                                    </td>
                                                    <td><?= $ogn->kegiatan ?></td>
                                                    <td>
                                                        <?php if ($ogn->validasi == 'VALID') { ?>
                                                            <label class="btn bg-green"><?= $ogn->validasi ?> <i class="fa fa-check-square fa-lg"></i></label>
                                                        <?php } else if ($ogn->validasi == 'TIDAK VALID') { ?>
                                                            <label class="btn bg-danger"><?= $ogn->validasi ?></label>
                                                        <?php } else if ($ogn->validasi == 'BARU') { ?>
                                                            <label class="btn bg-blue"><?= $ogn->validasi ?></label>
                                                        <?php } else if ($ogn->validasi == 'TINJAU ULANG') { ?>
                                                            <label class="btn bg-warning"><?= $ogn->validasi ?></label>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
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
                                            foreach ($prestasi as $pts) : ?>
                                                <tr>
                                                    <td>
                                                        <?= $no++ ?>
                                                    </td>
                                                    <td><?= $pts->kegiatan ?></td>
                                                    <td>
                                                        <?php if ($pts->validasi == 'VALID') { ?>
                                                            <label class="btn bg-green"><?= $pts->validasi ?> <i class="fa fa-check-square fa-lg"></i></label>
                                                        <?php } else if ($pts->validasi == 'TIDAK VALID') { ?>
                                                            <label class="btn bg-danger"><?= $pts->validasi ?></label>
                                                        <?php } else if ($pts->validasi == 'BARU') { ?>
                                                            <label class="btn bg-blue"><?= $pts->validasi ?></label>
                                                        <?php } else if ($pts->validasi == 'TINJAU ULANG') { ?>
                                                            <label class="btn bg-warning"><?= $pts->validasi ?></label>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
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
                                                    <td>
                                                        <?php if ($ptm->validasi == 'VALID') { ?>
                                                            <label class="btn bg-green"><?= $ptm->validasi ?> <i class="fa fa-check-square fa-lg"></i></label>
                                                        <?php } else if ($ptm->validasi == 'TIDAK VALID') { ?>
                                                            <label class="btn bg-danger"><?= $ptm->validasi ?></label>
                                                        <?php } else if ($ptm->validasi == 'BARU') { ?>
                                                            <label class="btn bg-blue"><?= $ptm->validasi ?></label>
                                                        <?php } else if ($ptm->validasi == 'TINJAU ULANG') { ?>
                                                            <label class="btn bg-warning"><?= $ptm->validasi ?></label>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
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
                                                    <td>
                                                        <?php if ($plt->validasi == 'VALID') { ?>
                                                            <label class="btn bg-green"><?= $plt->validasi ?> <i class="fa fa-check-square fa-lg"></i></label>
                                                        <?php } else if ($plt->validasi == 'TIDAK VALID') { ?>
                                                            <label class="btn bg-danger"><?= $plt->validasi ?></label>
                                                        <?php } else if ($plt->validasi == 'BARU') { ?>
                                                            <label class="btn bg-blue"><?= $plt->validasi ?></label>
                                                        <?php } else if ($plt->validasi == 'TINJAU ULANG') { ?>
                                                            <label class="btn bg-warning"><?= $plt->validasi ?></label>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
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
                                                    <td>
                                                        <?php if ($pnj->validasi == 'VALID') { ?>
                                                            <label class="btn bg-green"><?= $pnj->validasi ?> <i class="fa fa-check-square fa-lg"></i></label>
                                                        <?php } else if ($pnj->validasi == 'TIDAK VALID') { ?>
                                                            <label class="btn bg-danger"><?= $pnj->validasi ?></label>
                                                        <?php } else if ($pnj->validasi == 'BARU') { ?>
                                                            <label class="btn bg-blue"><?= $pnj->validasi ?></label>
                                                        <?php } else if ($pnj->validasi == 'TINJAU ULANG') { ?>
                                                            <label class="btn bg-warning"><?= $pnj->validasi ?></label>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?> </tr>
                                        </tbody>
                                    </table>
                                    <hr>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Validasi</label>
                                        <select name="validasi" required class="form-control">
                                            <option value="BARU" <?= ($data['validasi'] == 'BARU') ? 'selected' : '' ?>>BARU</option>
                                            <option value="VALID" <?= ($data['validasi'] == 'VALID') ? 'selected' : '' ?>>VALID</option>
                                            <option value="TIDAK VALID" <?= ($data['validasi'] == 'TIDAK VALID') ? 'selected' : '' ?>>TIDAK VALID</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <textarea name="ket_validasi" required class="form-control" rows="3" placeholder="Masukan Keterangan">ok</textarea>
                                    </div>
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Perbarui</button>
                                        <button type="button" class="btn btn-warning btn-flat" onClick="history.back();">Batalkan</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>