<?php 
// array 1 dimensi
$cars1 = array("Volvo", "Toyota", "BMW");	// digunakan ketika php masih php 4
$cars2 = ["Honda", "Suzuki", "Mazda"]; 	 	// digunakan jika php sudah php 5
// 1. Cara pemanggilan 1  $variable [no]; No selalu diawali dengan angka 0 bukan 1
// echo "Car 1 - " . $cars[0] . "\nCar 3 - " . $cars[2] . "\nCar 2 - " . $cars[1];

// 2. Cara mengetahui jumlah data dalam array dengan menggunakan COUNT
// echo count($cars);

// 3. Array dengan Perulangan
// $x = count($cars1);
// for ($i=0; $i<$x; $i++) { 
// 	echo "Mobil ke " . ($i+1) . " adalah " . $cars1[$i] . "\n";
// }

// ---------------------------------
// Tugas 9
$nama  = ['Thoni','Budi', 'Anto','Joko','Andik'];
$benda = ['Piring', 'Gelas', 'Sendok'];

// for ($i=1; $i<(count($arr2)) ; $i++) { 
// 	if ($i<=3){
// 		echo $arr2[$i] . "\n";
// 	}
// }

// echo $nama[0] . " membawa " . $benda[0] . " dan " . $benda[1] . ", sedangkan " . $nama[3] . " membawa " . $benda[2] . " bersama " . $nama[1] . ", " . $nama[2] . " dan " . $nama[4] . "."; 

// array multi dimensi
$klrg = [
			['A1', 'B1', 'C1'],
			['A2', 'B2', 'C2'],
			['A3', 'B3', 'C3']		
		];
$arr4 = array(
			array('A1', 'B1', 'C1'),
			array('A2', 'B2', 'C2'),
			array('A3', 'B3', 'C3')		
		);

// echo $arr3[0][1] ."\n";
// echo $arr4[0][1];

// $jmlAnk = count($klrg);

// for ($i=0; $i < $jmlAnk; $i++) { 
	
// 	$jmlPrmn = count($klrg[$i]);

// 	echo "Anak Ke " . $i . "\n";

// 	for ($j=0; $j < $jmlPrmn; $j++) { 
// 		echo "punya permen = " . $klrg[$i][$j] . "\n";
// 	}

// 	echo "\n";
// }


?>