
<?php
$id=$_GET['id'];
 $a=$koneksi->query("select * from asrama where id='$id'");
                while ($row=$a->fetch_assoc()) {
    ?>
<form class="row-border" action="?page=action-asrama&action=edit-asrama" method="post">

			<div class="form-group">
			<label>Id<span class="required">*</span></label>
			<input name="id" type="text" class="required form-control" value="<?= $row['id']?>" readonly>
			</div>

			<div class="form-group">
			<label>Nama Asrama <span class="required">*</span></label>
			<input name="nama" type="text" class="required form-control" value="<?= $row['nama']?>">
			</div>

			
			<div class="form-group">
			<label>Harga Asrama<span class="required">*</span></label>
			<input name="harga" type="text" class="required form-control" value="<?= $row['HargaP']?>">
			</div>


			<div class="form-group">
			<label>Tipe<span class="required">*</span></label>
			<input name="tipe" type="text" class="required form-control" value="<?= $row['tipe']?>">
			</div>

			<div class="form-group">
			<label>Lama<span class="required">*</span></label>
			<input name="lama" type="text" class="required form-control" value="<?= $row['lama']?>">
			</div>


			<div class="form-group">
			<label>Kapasitas<span class="required">*</span></label>
			<input name="kapasitas" type="text" class="required form-control" value="<?= $row['jumlah_orang']?>">
			</div>


			<div class="form-actions">
			<button class="btn  btn-warning" type="reset">Reset</button>
			<button class="btn btn-primary" name="Daftar" type="submit">Registrasi</button>
			</div>
</form>

    <?php } ?>