<?php
	include 'connection.php';
	
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$query = "DELETE FROM u194943051_dbhos.data where id = ".$id."";
		$result = mysqli_query($conn, $query);
		
		if($result){
			header('Location: spg.php?m=lihat data');
		}
		else 'Delete gagal';
	}
?>