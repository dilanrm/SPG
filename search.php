<?php 
	extract($_POST); 
	if(isset($_POST['lo'])){
		$id = $_POST['lo'];
?>

<a href="spg.php?m=data insert" class="btn btn-primary btn-sm float-right">Add</a>

<br><br>

<form action="spg.php?m=search" method="post">

		<label>Lokasi</label>

		<select name="lo">

			

			<?php

				$query = 'SELECT * FROM u194943051_dbhos.lokasi';

				$result = mysqli_query($conn, $query);

				while($row = mysqli_fetch_assoc($result)) {

			?>

			

			<option value="<?php echo $row['id']; ?>"><?php echo $row['lokasi']; ?></option>

			

			<?php } ?>

		</select>

	<input type="submit" value="search">

</form>
<a href="pdf.php" class="btn btn-danger btn-sm float-right">PDF</a>
<table class="table">



	<thead class="thead-default">



		<tr>



			<th>#</th>



			<th>Waktu</th>



			<th>Lokasi</th>



			<th>Skala Richter</th>



			<th>Status</th>



			<th></th>



		</tr>



	</thead>



	<tbody>



		



		<?php



			//$query = 'SELECT * FROM data INNER JOIN categories ON data.status = status.status';



			//$result = mysqli_query($link, $query);



			$sql = "SELECT * FROM u194943051_dbhos.data where lokasi = ".$id." order by id desc";

			$result = $conn->query($sql);



			if(mysqli_num_rows($result) == 0) {



		?>

	



		<tr>



			<td colspan="6" class="text-center">Empty data</td>



		</tr>



		<?php



			}



			$i = 1;



			while($row = mysqli_fetch_assoc($result)) {



		?>



		<tr>



			<td><?php echo $i++; ?></td>



			<td><?php echo $row['waktu']; ?></td>



			<td><?php 

			if($row['lokasi'] == 1) echo 'Jawa Barat';

			else if($row['lokasi'] == 2) echo 'Sumatra Utara';

			else if($row['lokasi'] == 3) echo 'Jawa Tengah';

			else if($row['lokasi'] == 4) echo 'Jawa Timur';

			else if($row['lokasi'] == 5) echo 'Sumatra Barat';

			else if($row['lokasi'] == 6) echo 'Sulawesi Utara';

			?></td>



			<td><?php echo $row['skalar']; ?></td>



			<td><?php 

			

			$sr = $row['skalar'];

			$stat = ' ';

			if($sr <= 2.0) $stat = 'Aman';

			else if($sr > 2.0 && $sr < 5.0) $stat = 'Siaga';

			else if($sr > 5.0) $stat = 'Bahaya';

			else $stat = 'Error';

			

			if(!isset($sr)) echo $row['status']; 

			else echo $stat;

			

			?></td>



			<td class="text-right">



				<a href="delete.php?&id=<?php echo $row['id']?>" class="btn btn-danger btn-sm" onClick="return confirm('Anda yakin?')">Delete</a>



			</td>



		</tr>



		



		<?php } ?>



				



	</tbody>



</table>



	<?php } ?>