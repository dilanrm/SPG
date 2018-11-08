<?php

	include 'connection.php';

	$amp = $_POST['amp'];

	$jrk = $_POST['jarak'];

	$l = $_POST['l'];

	date_default_timezone_set('Asia/Jakarta');

	$sr = log10($amp) + 3 * log10($jrk) - 2.93;

	if($sr <= 2.0) $stat = 'Aman';

	else if($sr > 2.0 && $sr < 5.0) $stat = 'Siaga';

	else if($sr > 5.0) $stat = 'Bahaya';

	else $stat = 'Error';

	

	$query = 'INSERT INTO u194943051_dbhos.data (`id` ,`waktu` ,`lokasi` ,`skalar` ,`status`) 

	VALUES (NULL , "'.date('Y-m-d H:i:s').'" ,  "'.$l.'",  "'.$sr.'",  "'.$stat.'")';

	

	$result = mysqli_query($conn, $query);

	

	if($result)

		header('Location: spg.php?m=lihat data');

	else

		echo 'Insert Failed';

?>

