<?php
	include 'connection.php';
	$nama = $_POST['nb'];
	$sql = "UPDATE `u194943051_dbhos`.`admin` SET `nama` = '".$nama."' WHERE `admin`.`username` = '".$_SESSION['username']."'";
	$result = mysqli_query($conn, $sql);

	if($result)
		header('Location: spg.php?m=user');
	else
		echo 'Update Failed for '.$nama.' '.$_SESSION['username'].'';
?>