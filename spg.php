<?php
	session_start();

	include 'connection.php';

	include 'header.php';
	
	if(isset($m)){
		if(empty($_SESSION['username']) && $m != 'welcome' && $m != 'log in') header('Location: index.php');
		else include $m.'.php';
	}
	else include 'home.php';

	include 'footer.php';

?>