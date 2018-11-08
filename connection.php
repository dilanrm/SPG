<?php

	/*

		MySQL

		1. Buka koneksi ke Server

		2. Pilih DB

		3. Buat Query

	

		$server = 'localhost';

		$username = 'root';

		$password = '';

		

		mysql_connect($server, $username, $password) or die('Connection Failed');

		

		$database_name = 'boutique';

		

		mysql_select_db($database_name) or die('DB Failed');

		

		MySQLi

		1. Buka koneksi ke Server dan DB

		2. Buat Query

	*/

	

	$server = 'mysql.idhostinger.com';

	$username = 'u194943051_kuuni';

	$password = 'password';

	$database_name = 'u194943051_dbhos';

	$conn = new mysqli($servername, $username, $password);

	//$conn = mysqli_connect($server, $username, $password, $database_name) or die('Connection Failed');
/*
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);
*/
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>

