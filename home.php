<div class="row">
	<div class="col-10">
		<h2>Beranda</h2>
		<p align="justify">
			Sistem Pendeteksi Gempa (SPG) adalah aplikasi/perangkat lunak 
			terintegrasi (<i>embedded</i>) pada sebuah alat pendeteksi gempa.
			Pendeteksi gempa dibuat untuk memudahkan seorang administrator untuk mencari
			data sumber gempa tanpa langsung mendatangi tempat kejadian. Administrator
			akan menyebarkan alat pendeteksi tersebut ke beberapa lokasi yang biasa menjadi 
			titik pusat gempa. Alat tersebut dilengkapi sensor yang akan mengirimkan data ke 
			<i>web</i>. Administrator juga dapat secara manual memasukkan data kejadian gempa
			ditampilkan oleh alat ke <i>web</i> jika alat mengalami masalah dalam memasukkan 
			data secara manual.
		</p>
		<br>
		<h2>Artikel</h2>
		<div class="row">
			<?php
				$query = 'select * from u194943051_dbhos.bacaan';
				$result = mysqli_query($conn, $query);
				while($row=mysqli_fetch_assoc($result)){
			?>
			<div class="card col-3">
				<div class="card">
					<img class="card-img-top" src="artikel<?php echo $row['id']; ?>.jpg" alt="Gambar artikel <?php echo $row['id']; ?>">
					<div class="card-body">
						<h4 class="card-title"><?php echo $row['judul']; ?></h4>
						<a href="artikel.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-primary btn-block">Baca>></a>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
	<div class="col-2" style="background-color:lightblue;"><br>
		<p style="background-color:grey;padding:2px;">
		<?php 
			date_default_timezone_set('Asia/Jakarta');
			echo 'Tanggal : '.date('Y-m-d').'<br>Jam : '.date('H:i');
		?>
		</p>
		<meta http-equiv="refresh" content="60;URL='spg.php'" />
		<!--input type="button" value="Refresh" onClick="history.go(0)"-->
	
	</div>
</div>