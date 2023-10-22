<div class="row">
  <section class="col-lg-12">
    <div class="box" style="margin: 20px">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama File</th>
            <th>Nama Mahasiswa</th>
            <th>File</th>
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