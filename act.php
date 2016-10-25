<?php
	
	// $nama = $_POST['nama'];
	// $alamat = $_POST['alamat'];
	// $tlpn = $_POST['tlpn'];

	// echo $nama . "<br>" . $alamat . "<br>" . $tlpn;

	$input_val = $_POST;

	echo "<pre>";
	print_r($input_val);
	echo "</pre>";

	echo "Nama : " . $input_val['nama'] . "<br>" . "Alamat : " . $input_val['alamat'] . "<br>" . "No. Telepon : ". $input_val['tlpn'] . "<br>" . "Jenis Kelamin : " . $input_val['jk']
	;

?>