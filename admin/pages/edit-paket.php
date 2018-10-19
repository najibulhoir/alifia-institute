
<?php
$id_paket=$_GET['id_paket'];
 $a=$koneksi->query("select * from Paket where id_paket='$id_paket'");
                while ($row=$a->fetch_assoc()) {
    ?>
<form class="row-border" action="?page=action&&action=editpaket" method="post">

			<div class="form-group">
			<label>Id Paket <span class="required">*</span></label>
			<input name="id" type="text" class="required form-control" value="<?= $row['id_paket']?>" readonly>
			</div>

			<div class="form-group">
			<label>Nama Paket <span class="required">*</span></label>
			<input name="nama" type="text" class="required form-control" value="<?= $row['nama_paket']?>">
			</div>

			
			<div class="form-group">
			<label>Harga Paket<span class="required">*</span></label>
			<input name="harga" type="text" class="required form-control" value="<?= $row['HargaK']?>">
			</div>

			<div class="form-group">
			<label>Lama<span class="required">*</span></label>
			<input name="lama" type="text" class="required form-control" value="<?= $row['lama']?>">
			</div>


			<div class="form-actions">
			<button class="btn  btn-warning" type="reset">Reset</button>
			<button class="btn btn-primary" name="Daftar" type="submit">Registrasi</button>
			</div>
</form>

    <?php } ?>