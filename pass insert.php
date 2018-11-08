<?php
	include 'connection.php';
	$pass = $_POST['pb'];
	$sql = "UPDATE `u194943051_dbhos`.`admin` SET `password` = '".$pass."' WHERE `admin`.`username` = '".$_SESSION['username']."'";
	$result = mysqli_query($conn, $sql);

	if($result)
		header('Location: spg.php?m=user');
	else
		echo 'Update Failed for '.$pass.' '.$_SESSION['username'].'';
?>