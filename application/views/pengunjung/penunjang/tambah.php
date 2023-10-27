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
                                <h3 class="box-title">Tambah <?= $title ?></h3>
                            </div><!-- /.box-header -->
                            <!-- form start -->
                            <form method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_user" value="1048">
                                <input type="hidden" name="id_mahasiswa" value="1051">
                                <div style="margin:10px" class="callout callout-success">
                                    <h4>Ketentuan Khusus</h4>
                                    <p>
                                        [1] Keikutsertaan Kegiatan yang Menunjang Prestasi/Kompetensi/Pengalaman Kerja adalah yang <b><u>DIPEROLEH SELAMA MENJADI MAHASISWA</b></u><br>
                                        [2] Dapat diajukan lebih dari satu sertifikat, dan <b><u>MAKSIMAL 7 SERTIFIKAT</b></u> yang dianggap <b><u>TERBAIK</b></u><br>
                                        [3] File Bukti Sertifikat berformat <b><u> .pdf </b></u>
                                    </p>
                                </div>
                                <div class="form-group">
                                    <label>Bentuk Kegiatan</label>
                                    <input required type="text" class="form-control" name="kegiatan" placeholder="Nama kegiatan yang diikuti">
                                </div>
                                <div class="form-group">
                                    <label>Peran</label>
                                    <input required type="text" class="form-control" name="peran" placeholder="Peran dalam kegiatan yang diikuti. Contoh. Peserta , Asisten Dosen">
                                </div>
                                <div class="form-group">
                                    <label>No. Sertifikat/Surat</label>
                                    <input required type="text" class="form-control" name="nomor" placeholder="No. Sertifikat/Surat">
                                </div>
                                <div class="form-group">
                                    <label>Penyelenggara</label>
                                    <input required type="text" class="form-control" name="penyelenggara" placeholder="Penyelenggaran kegiatan yang diikuti">
                                </div>
                                <div class="form-group">
                                    <label>Waktu/Periode</label>
                                    <input required type="text" class="form-control" name="periode" placeholder="Contoh. 20-22 Agustus 2021 , 29 Agustus 2021">
                                </div>
                                <div class="form-group">
                                    <label for="file_sertifikat">File Sertifikat</label>
                                    <input class="bg-green form-control" type="file" name="file_sertifikat" id="file_sertifikat" accept=".pdf" required>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>&nbsp;&nbsp;&nbsp;
                                    <button type="button" class="btn btn-warning btn-flat" onClick="history.back();">Batalkan</button>
                                </div>
                            </form>

                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!--/.col (left) -->

            </div><!-- /.box-body -->
</section>