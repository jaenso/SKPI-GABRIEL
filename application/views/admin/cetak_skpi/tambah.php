<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header with-border">
                                <h3 class="card-title">Tambah Data Cetak SKPI</h3>
                            </div>
                            <form method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Mahasiswa</label>
                                        <input required type="text" class="form-control" name="nama" value="<?= $data['nama']; ?> - <?= $data['nim']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nama File</label>
                                        <input required type="text" class="form-control" name="nama_file_skpi" placeholder="Nama File">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">File Cetak SKPI</label>
                                        <input class="bg-aqua form-control" type="file" name="file_skpi" accept=".pdf" required>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Tambah</button>
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