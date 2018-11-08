<?php
ob_start();
	require 'assets/tcpdf/tcpdf.php';
	include 'connection.php';
	//ob_start();
	$pdf = new TCPDF();
	
	$orientation = 'P';
	//$orientation = 'L';
	$format = 'A4';
	
	$pdf->AddPage($orientation, $format);
	
	$html = '<h1>Data Kejadian</h1>
	<table border="1">
		<tr bgcolor="gray">
			<th>#</th>
			<th>Waktu</th>
			<th>Lokasi</th>
			<th>Skala Richter</th>
			<th>Status</th>
		</tr>';
		
			$query = 'SELECT * FROM u194943051_dbhos.data order by id desc';
			
			$result = mysqli_query($conn, $query);
			
			$i = 1;
			
			while($row = mysqli_fetch_assoc($result)) {
				$html .= '<tr>
			<td>' .($i++). '</td>
			<td>' .$row['waktu']. '</td>
			<td>' ;
			if($row['lokasi'] == 1) $lok = 'Jawa Barat';
			else if($row['lokasi'] == 2) $lok = 'Sumatra Utara';
			else if($row['lokasi'] == 3) $lok = 'Jawa Tengah';
			else if($row['lokasi'] == 4) $lok = 'Jawa Timur';
			else if($row['lokasi'] == 5) $lok = 'Sumatra Barat';
			else if($row['lokasi'] == 6) $lok = 'Sulawesi Utara';
			$html .= ''.$lok.'</td> 
			<td>'  .$row['skalar']. '</td>
			<td>';
			$sr = $row['skalar'];
			$stat = ' ';
			if($sr <= 2.0) $stat = 'Aman';
			else if($sr > 2.0 && $sr < 5.0) $stat = 'Siaga';
			else if($sr > 5.0) $stat = 'Bahaya';
			else $stat = 'Error';
			
			if(!isset($sr)) $stat = $row['status']; 
			else $stat = $stat;
			$html .= ''.$stat.'</td>
		</tr>';
		 } 
$html .= '</table>';
	
	$pdf->writeHTML($html);
	
	$filename = '[SPG]Data.pdf';
	$dest = 'D'; //download
	//$dest = 'I'; //browser
	//$dest = 'F'; //buat file di server
	
	ob_end_clean();
	$pdf->Output($filename, $dest);
?>