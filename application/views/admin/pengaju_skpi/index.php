<div class="row">
  <section class="col-lg-12">
    <div style="margin:20px" class="callout callout-success">
      <h4>Ketentuan Khusus</h4>
      <p>
        [1] Pastikan <b><u>DATA AKADEMIK dan DATA KEIKUTSERTAAN </b></u>telah selesai diinput dan semua bersatatus VALID<br>
        [2] Pengajuan SKPI hanya dapat dilakukan 1X, apabila ada kesalahan silahkan hapus pengajuan dan <b><u>AJUKAN BARU KEMBALI</b></u> <br>
        [3] Pengajuan SKPI yang berstatus VALID akan<b><u> DIKUNCI SISTEM DAN TIDAK DAPAT DIAJUKAN ULANG</b></u><br>
        [4] File Ijazah berformat gambar <b><u> .JPG / .PNG </b></u> untuk memvalidasi Nomor Ijazah yang diinput
      </p>
    </div>
    <div class="box" style="margin: 20px">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nomor Ijazah</th>
            <th>Tanggal, Bulan, Tahun Lulus</th>
            <th>Validasi</th>
            <th>Keterangan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>DAB115011
              ACHMAD YANI</td>
            <td>222012022000109</td>
            <td>01 Desember 2021</td>
            <td><a class="btn bg-green" href="">VALID <i class="fa fa-check-square fa-lg"></i></a>
            </td>
            <td>ok</td>
            <td>
              <a class="btn bg-olive" href="index.php?menu=7bb860f0e0ec72a530849439b417ce07&act=edit&idskpi=aWo%3D">
                <i class="fa fa-edit fa-lg" title="Edit"></i></a>
              <a class="btn bg-blue" href="index.php?menu=7bb860f0e0ec72a530849439b417ce07&act=cetak&idskpi=aWo%3D">
                <i class="ace-icon fa fa-envelope"></i> Cetak SKPI </a>

              <a class="btn bg-orange" href="index.php?menu=7bb860f0e0ec72a530849439b417ce07&act=delete&idskpi=aWo%3D">
                <i class="fa fa-trash fa-lg" title="Delete"></i></a>

            </td>
          </tr>

        </tbody>
      </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function() {
        $('#myTable').DataTable();
      });
    </script>

  </section>
  <!-- right col -->
</div>