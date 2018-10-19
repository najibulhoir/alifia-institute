<div class="main_grid">
		<div class="row"><!-- start span_of_4 -->
		<div class="col-3">
		<?php 
	include "koneksi.php";	
		
		$q=$koneksi->query("select * from Paket");
		while ($row=$q->fetch_assoc()) {
		    
		
		?>
		
			<div class="col-md-3">
			<center>
				<div class="span4_of_list" style="margin: 3%;">
					<span><i class="fa fa-book"></i></span>
					<h3><?= $row['nama_paket']?></h3>
					<h4><?= $row['lama']?></h4>
					
						<a class="btn btn-2 active" href="pages/pendaftaran.php">Daftar</a>
	
				</div>
				</center>
			</div>

			<?php	}	?>
			</div>
				</div>