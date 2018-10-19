  <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Example</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Tempat tanggal lahir</th>
                  <th>Telp. Siswa</th>
                  <th>Telp. Ortu</th>
                  <th>Pilihan Paket</th>
                  <th>Harga Paket</th>
                  <th>Pilihan Asrama</th>
                  <th>Harga Asrama</th>
                  <th>Total Harga</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Nama</th>
                  <th>Tempat tanggal lahir</th>
                  <th>Telp. Siswa</th>
                  <th>Telp. Ortu</th>
                  <th>Pilihan Paket</th>
                  <th>Harga Paket</th>
                  <th>Pilihan Asrama</th>
                  <th>Harga Asrama</th>
                  <th>Total Harga</th>
                </tr>
              </tfoot>
              <tbody>
              <?php
                $a=$koneksi->query("select tb_pendaftaran.Nama, tb_pendaftaran.Tetala, tb_pendaftaran.TelpSiswa, tb_pendaftaran.TelpOrtu, Paket.nama_paket, tb_pendaftaran.HargaP, asrama.nama,tb_pendaftaran.HargaK, tb_pendaftaran.Total from tb_pendaftaran inner join Paket on Paket.id_paket = tb_pendaftaran.id_daftar inner join asrama on asrama.id = tb_pendaftaran.id_daftar order by id_daftar");
                while ($row=$a->fetch_assoc()) {
              ?>
              <tr>
                  <td><?= $row['Nama']?></td>
                  <td><?= $row['Tetala']?></td>
                  <td><?= $row['TelpSiswa']?></td>
                  <td><?= $row['TelpOrtu']?></td>
                  <td><?= $row['nama_paket']?></td>
                  <td><?= $row['HargaP']?></td>
                  <td><?= $row['nama']?></td>
                  <td><?= $row['HargaK']?></td>
                  <td><?= $row['Total']?></td>
              </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
   