<?php
	include 'connection.php';

	$chart = array(
		'caption' => 'Jumlah Kejadian',
		'subCaption' => 'tahun 2017',
		'xAxisName' => 'Lokasi',
		'yAxisName' => 'Jumlah',
		'theme' => 'zune'
	);
	$data = array();
	
	$query = 'SELECT  lokasi, count(status) as jumlah from u194943051_dbhos.data inner join status ON data.status = status.id_stat';
	$result = mysqli_query($conn, $query);
	while($row = mysqli_fetch_assoc($result)){
		array_push($data, array(
			'label' => $row['lokasi'],
			'value' => $row['jumlah']
		));
	}
	
	$dataSource = array(
		'chart' => $chart,
		'data' => $data
	);

	echo json_encode($dataSource);
?>