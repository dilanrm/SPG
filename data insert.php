<br><br>
<form method="post" action="spg.php?m=spg insert">

	<div class="form-group">

		<label>Amplitudo</label>

		<input  class="form-control" type='text' name='amp' placeholder='Amplitudo' required> mm</input>

	</div>

	<div class="form-group">

		<label>Jarak</label>

		<input type="text" name="jarak" class="form-control" placeholder="Jarak" required> km</input>

	</div>

	<div class="form-group">

		<label>Lokasi</label>

		<select class="form-control" name="l">

			

			<?php

				$query = 'SELECT * FROM u194943051_dbhos.lokasi';

				$result = mysqli_query($conn, $query);

				

				while($row = mysqli_fetch_assoc($result)) {

			?>

			

			<option value="<?php echo $row['id']; ?>"><?php echo $row['lokasi']; ?></option>

			

			<?php } ?>

		</select>

	</div>

	<div class="form-group">

		<input type="submit" value="Submit" class="btn btn-primary btn-block">

	</div>

</form>


