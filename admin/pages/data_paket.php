   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles-->
  <link href="css/sb-admin.css" rel="stylesheet">
  
  <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Tabel Paket</div>
        <div class="card-body">
        <a href="?page=tambah-paket" class="fa fa-plus-square fa-3x"></a>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Paket</th>
                  <th>Harga Paket</th>
                  <th>Lama Paket</th>
                  <th colspan="2">Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama Paket</th>
                  <th>Harga Paket</th>
                  <th>Lama Paket</th>
                  <th colspan="2">Action</th>
                </tr>
              </tfoot>
              <tbody>
              <?php
              $i=1;
                $a=$koneksi->query("select * from Paket");
                while ($row=$a->fetch_assoc()) {
              ?>
              <tr>
                  <td><?= $i++?></td>
                  <td><?= $row['nama_paket']?></td>
                  <td><?= $row['HargaK']?></td>
                  <td><?= $row['lama']?></td>
                  <td><a href="?page=edit-paket&&id_paket=<?= $row['id_paket']?>" class="fa fa-pencil-square fa-3x"></a></td>
                  <td><a href="pages/action.php?action=deletepaket&&id_paket=<?= $row['id_paket']?>" class="fa fa-trash fa-3x"></a></td>
                  
              </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
      <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>