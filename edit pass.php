<?php 
	extract($_GET); 
	$usern = $_GET['id'];
	$sql = 'SELECT * FROM u194943051_dbhos.admin where username = "'.$usern.'"';
	$row1 = mysqli_fetch_assoc(mysqli_query($conn, $sql));
?>

<br><br>
<form method="post" action="spg.php?m=pass insert">
	<div class="form-group">
		<input  class="form-control" type='password' name='pb' value="<?php echo $row1['password']; ?>" placeholder='Password Baru' required></input>
	</div>
	<div class="form-group">
		<input type="submit" value="Submit" class="btn btn-primary btn-block">
	</div>
</form>