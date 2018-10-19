<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Example</div>
        <div class="card-body">
        <a href="?page=tambah-asrama" class="fa fa-plus-square fa-3x"></a>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama </th>
                  <th>Harga</th>
                  <th>Tipe</th>
                  <th>Lama</th>
                  <th>Kapasitas</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama Paket</th>
                  <th>Harga Asrama</th>
                  <th>Tipe</th>
                  <th>Lama</th>
                  <th>Kapasitas</th>
                  <th colspan="2">Action</th>
                </tr>
              </tfoot>
              <tbody>
              <?php
              $i=1;
                $a=$koneksi->query("select * from asrama");
                while ($row=$a->fetch_assoc()) {
              ?>
              <tr>
                  <td><?= $i++?></td>
                  <td><?= $row['nama']?></td>
                  <td><?= $row['HargaP']?></td>
                  <td><?= $row['tipe']?></td>
                  <td><?= $row['lama']?></td>
                  <td><?= $row['jumlah_orang']?></td>
                  <td><a href="?page=edit-asrama&&id=<?= $row['id']?>" class="fa fa-pencil-square fa-3x"></a></td>
                  <td><a href="pages/action-asrama.php?action=deleteasrama&&id=<?= $row['id']?>" class="fa fa-trash fa-3x"></a></td>
                  
              </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>