<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card card-info">
                <div style="margin:20px" class="callout callout-success">
                    <h4>Ketentuan Pengajuan</h4>
                    <p>
                        [1] Harap diisi sesuai dengan <b><u>DATA DI KHS CETAK DARI BAGIAN AKADEMIK</b></u><br>
                        [2] File Bukti KHS berformat <b><u> .JPG </b></u>dan Nama file yang dikirim di rename dengan NIM masing-masing. Contoh: DAB119001_KHSsms1, DAB119001_KHSsms2 <br>
                        [3] Pengajuan yang berstatus VALID <b><u> tidak dapat diubah lagi </b></u>
                    </p>
                </div>
                <div class="card-body">
                    <div class="btn-group">
                        <a href="<?= base_url(); ?>akademik/tambahKHS">
                            <button class="btn btn-block btn-primary btn-flat">Tambah Data </button>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr align="center">
                                <th width="5%">No.</th>
                                <th width="30%">Data KHS</th>
                                <th width="20%">Data Akademik</th>
                                <th width="30%">Validasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data as $data) : ?>
                                <tr>
                                    <td>
                                        <?= $no++ ?>
                                    </td>
                                    <td>
                                        KHS Semester : <?= $data->semester ?><br>
                                        Jumlah Mata Kuliah : <?= $data->jml_matkul ?><br>
                                        Jumlah SKS yang Diprogramkan : <?= $data->jml_sks_program ?><br>
                                        Jumlah SKS Lulus : <?= $data->jml_sks_lulus ?> </td>
                                    <td>
                                        <a href="#" type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#myModal4437">
                                            <i class="fa fa-tasks fa-lg" title="Input Nilai"></i> Cek Input Nilai</a>
                                        <a class="btn bg-maroon" href="<?= base_url('akademik/inputNilai/' . $data->id_khs); ?>">
                                            <i class="fa fa-tasks fa-lg" title="Input Nilai"></i> Nilai Belum Diisi</a>
                                    </td>
                                    <td>
                                        <label class="btn bg-green"><?= $data->validasi ?> <i class="fa fa-check-square fa-lg"></i></label>
                                        <br>Keterangan : <br>
                                        Sudah sesuai terima kasih <br>
                                        <label class="btn bg-blue"><?= $data->validasi ?></label>
                                        <br>Keterangan : <br>
                                        <?= $data->ket_validasi ?>
                                    </td>
                                    <td align="center">
                                        <label class="btn bg-green"><?= $data->validasi ?> <i class="fa fa-check-square fa-lg"></i></label>

                                        <a class="btn bg-olive" href="<?= base_url('akademik/editKHS/' . $data->id_khs); ?>">
                                            <i class="fa fa-edit fa-lg" title="Edit"></i></a>
                                        <a class="btn bg-maroon" href="<?= base_url('akademik/inputNilai/' . $data->id_khs); ?>">
                                            <i class="fa fa-tasks fa-lg" title="Input Nilai"></i></a>
                                        <a class="btn bg-orange" href="<?= base_url('akademik/hapusKHS/' . $data->id_khs); ?>" onclick="return confirm('Yakin?');">
                                            <i class="fa fa-trash fa-lg" title="Delete"></i></a>

                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal Edit Mahasiswa-->
<div class="modal fade" id="myModal4437" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Validasi Input Nilai</h4>
            </div>
            <div class="modal-body">

                <!-- ISI MODAL -->
                <div class="modal-body col-md-8">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <b>
                                <h2 class="box-title">File Upload KHS Semester 7</h2>
                            </b>
                        </div>
                        <img class="img-responsive pad" src="codes/khs/38akhirnya_29.pdf">
                        Jumlah Mata Kuliah: 5<br>
                        Jumlah SKS yang Diprogramkan: 18<br>
                        Jumlah SKS Lulus: 112
                    </div>
                </div>

                <div class="modal-body col-md-4">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <b>
                                <h2 class="box-title">Input Nilai berdasarkan KHS</h2>
                            </b>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <h5 class="box-title">Mata Kuliah</h5>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" value="MATEMATIKA TEKNIK I" readonly>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" value="C+" size="1px" readonly>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" value="FISIKA TEKNIK" readonly>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" value="A" size="1px" readonly>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" value="ALGORITMA DAN PEMROGRAMAN - PRAKTIKUM" readonly>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" value="A" size="1px" readonly>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" value="BAHASA INGGRIS TEKNIK" readonly>
                        </div>
                        <div class "form-group">
                            <input type="text" class="form-control" value="A" size="1px" readonly>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" value="AGAMA BUDHA" readonly>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" value="A" size="1px" readonly>
                        </div>
                    </div>
                </div>
                <!-- END ISI MODAL -->

            </div><!-- DIV MODAL BODY -->
        </div>
    </div>
</div>