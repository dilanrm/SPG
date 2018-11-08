<head>
	<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/bootstrap-4.0.0/css/bootstrap.min.css">	
		<!-- jQuery JS -->
		<script src="assets/jquery-3.2.1.slim.min.js"></script>
		<!-- Popper JS -->
		<script src="assets/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="assets/bootstrap-4.0.0/js/bootstrap.min.js"></script>
	<link rel="icon" type="image/gif" href="ico.png" />
	<title>Artikel</title>
<head>
<body style="background-image:url('bg-artikel.jpg');background-size:100%;">
<div class="container">
<?php
	extract($_GET);
	include 'connection.php';
	
	$query = 'select * from u194943051_dbhos.bacaan where id = '.$id.'';
	$result = mysqli_query($conn, $query);
	while($row=mysqli_fetch_assoc($result)){
?>
<h2 style="background-color:white;opacity:0.9;" align="center"><?php echo $row['judul']; ?></h2>

	<img src="artikel<?php echo $id;?>.jpg" alt="Gambar Artikel">
	<p align="justify" style="background-color:white;opacity:0.8;"><?php echo $row['isi']; ?>
	<br><br>
	<a href="spg.php" class="btn btn-outline-primary" value="Kembali">Kembali</a>
	<a href="#" class="btn btn-outline-primary float-right" value="Kembali">Back to Top</a>
	<br>
	</p>
	<?php }
		include 'footer.php';
	?>