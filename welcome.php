<?php
	include 'connection.php';

	extract($_POST);

	$query = 'SELECT * from u194943051_dbhos.admin where username="'.$username.'" and password="'.$password.'"';

	$result = mysqli_query($conn, $query);

	echo mysqli_num_rows($result);

	if(mysqli_num_rows($result) != 0){

		$row = mysqli_fetch_assoc($result);

		$_SESSION['username'] = $row['username'];
		
		date_default_timezone_set('Asia/Jakarta');
		$sql = 'Insert into u194943051_dbhos.log (`id`, `user`, `time`) 
		values (NULL, "'.$_SESSION['username'].'", "'.date('Y-m-d H:i:s').'")';
		mysqli_query($conn, $sql);
		header('Location: spg.php');
	}
	else header('Location: spg.php?m=log in');
	
?>





