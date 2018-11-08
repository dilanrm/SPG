<br><br>tes
<?php
	$query = 'SELECT * FROM u194943051_dbhos.log where user = "'.$_SESSION['username'].'" order by id desc limit 1';
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_assoc($result);
	$sql = 'SELECT * FROM u194943051_dbhos.admin where username = "'.$_SESSION['username'].'"';
	$row1 = mysqli_fetch_assoc(mysqli_query($conn, $sql));
	
	echo '<table>';
	echo '<tr>';
	echo '<td>Username </td><td> : '.$_SESSION['username'].'</td></tr>';
	echo '<tr><td>Nama </td><td> : '.$row1['nama'].' <a href="spg.php?m=edit nama&id='.$row1['username'].'">(Edit)</a></td></tr>';
	echo '<tr><td>Password </td><td> : ***************** <a href="spg.php?m=edit pass&id='.$row1['username'].'">(Edit)</a></td></tr>';
	echo '<tr><td>Last Login </td><td> : '.$row['time'].'</td></tr>';
	
?>