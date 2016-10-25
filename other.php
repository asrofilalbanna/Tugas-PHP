<?php

// Soal pertama
function UbahArray($nilaiArr) {
	$arr_out = []; //mengubah struktur

	foreach ($nilaiArr as $keyNama => $valueNama) {
		$arr_out[$valueNama] = []; // 
	}
	foreach ($nilaiArr as $key => $value) {
		array_push($arr_out[$value], $key); // array push menambah value
	}
	
	echo "<pre>";
	print_r($arr_out);
}

$arr = [
	'Piring'  => 'Budi',
	'Sendok'  => 'Seno',
	'Gelas'   => 'Budi'
];

UbahArray($arr);

//Soal Kedua
// function UbahArray($arr) {
// 	foreach ($arr as $key1 => $value1) { //key1=Alamat
// 		foreach ($arr[$key1] as $keyNama => $valueNama) { //keyNama=Budi, valueNama=Kalimantan
// 			$arr_out[$keyNama][$key1] = $valueNama;
// 		}
// 	}

// 	echo "<pre>";
// 	print_r($arr_out);
// }

// $arr = [
// 	'Alamat' => [
// 		'Budi' => 'Kalimantan',
// 		'Thoni' => 'Malang',
// 		'Jarwo' => 'Surabaya'
// 	],
// 	'Hobi' => [
// 		'Thoni' => 'SepakBola',
// 		'Budi' => 'Nonton TV',
// 		'Jarwo' => 'Baca Buku'
// 	]
// ];

// UbahArray($arr);

//Soal 3
// function UbahArray($arr) {
// 	foreach ($arr as $key1 => $value1) { //key1=Alamat
// 		foreach ($arr[$key1] as $keyNama => $valueNama) { //keyNama=Budi, valueNama=Kalimantan
// 			$hasil=$arr['Nilai'][$keyNama]/array_sum($arr['Nilai']);
// 			$arr_out[$keyNama][$key1] = $valueNama;	
// 		}
// 		$arr_out[$keyNama]['Nilai']=substr($hasil, -16, 4);
// 	}

// 	echo "<pre>";
// 	print_r($arr_out);

// }

// $arr = [
// 	'Alamat' => [
// 		'Budi'  => 'Kalimantan',
// 		'Thoni' => 'Malang',
// 		'Jarwo' => 'Surabaya'
// 	],
// 	'Hobi' => [
// 		'Thoni' => 'SepakBola',
// 		'Budi'  => 'Nonton TV',
// 		'Jarwo' => 'Baca Buku'
// 	],
// 	'Nilai' => [
// 		'Thoni' => 80,
// 		'Jarwo' => 90,
// 		'Budi'	=> 40
// 	]
// ];

// UbahArray($arr);

//Soal 4
// function UbahArray($arr) {
// 	foreach ($arr as $key1 => $value1) { //key1=a $value1=child
// 		$arrChild = [];
// 		foreach ($arr[$key1] as $key2 => $value2) {
// 			$arrChild[$key1][$key2]=[];
// 			if (count($value2) == 0) {
// 				$arr[$key1][$key2] = $arrChild;
// 			}
// 		}
// 	}	


// 	echo "<pre>";
// 	print_r($arr);
// }

// $arr = [

// 	'a' =>[
// 		'child' => []
// 	],

// 	'b' => [
// 		'child' => []
// 	]
// ];

// UbahArray($arr);

//Soal 5


// $var="ku";

// $arr = [
// 		'badak',
// 		'singa',
// 		'kuda',
// 		'kucing',
// 		'cacing',
// 		'lalat'
// 	];

// echo $cari = array_search('bad', $arr2); //3

// echo "<br>";

// echo "<pre>";
// for ($i=1; $i <count($arr) ; $i++) { 
// 	$arr2 = [$i=>$arr[$i]];
// }
// echo "<pre>";
// print_r($arr[1]);


// cariArray($arr);

?>