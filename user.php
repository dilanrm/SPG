<br><br>
<?php
	$query = 'SELECT * FROM u194943051_dbhos.log where user = "'.$_SESSION['username'].'" order by id desc limit 1';
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_assoc($result);
	$sql = 'SELECT * FROM u194943051_dbhos.admin where username = "'.$_SESSION['username'].'"';
	$row1 = mysqli_fetch_assoc(mysqli_query($conn, $sql));
?>
<table>
	 <tr>
	 <td>Username </td><td> : <?php echo $_SESSION['username']; ?></td></tr>
	 <tr><td>Nama </td><td> : <?php echo $row1['nama']; ?> <a href="spg.php?m=edit nama&id=<?php echo $row1['username']; ?>">(Edit)</a></td></tr>
	 <tr><td>Password </td><td> : ***************** <a href="spg.php?m=edit pass&id=<?php echo $row1['username']; ?>">(Edit)</a></td></tr>
	 <tr><td>Last Login </td><td> : <?php echo $row['time']; ?></td></tr>
</table>
	