<?php
// tugas 10
$arr =  [
	'nama'  => ['Thoni','Andik','Wawan'],
	'nilai' => [10,11,12],
	'kelas' => ['A','B','C']
];

$arr2 =  [
	'nama'  => ['Thoni','Andik','Wawan'],
	'nun'	=> [30,28.5,27],
	'kelas' => ['A','B','C'],
	'keterangan' => 'Semua siswa dinyatakan lolos'
];
// echo "<pre>";
// echo $arr['nama'][0];

// for ($i=0; $i <3 ; $i++) { 
// 	foreach ($arr2 as $index ) {
// 		echo $index[$i]."\n";
// 	}
// }

// Jika tidak ada $nilai maka nilai dari $index adalah value dari masing2 array 
// Jika ada $nilai maka nilai dari $index adalah nama ari masing2 index itu sendiri

// tugas 11
foreach ($arr2['nama'] as $key => $value) {
	echo $no . '. Nama  : ' . $value . "\n";
	echo '   Kelas : ' . $arr2['kelas'][$key] . "\n";
	echo '   Nilai : ' . $arr2['nun'][$key] . "\n";
	$no++;
}

// tugas 10
$no = 1;
// echo "Hasil Ujian Nasional SMA NEGERI XXX Malang memiliki siswa sebagai berikut :\n\n";
// for ($i=0; $i<3; $i++) {
// 	echo ($i+1) . ". Nama  : " . $arr2['nama'][$i] . "\n";
// 	echo "   Nilai : " .  $arr2['nun'][$i] . "\n";
// 	echo "   Kelas : " .  $arr2['kelas'][$i] . "\n\n";

// }



$no2 = 1;
// echo "\nMasing-masing mendapatkan nilai UN sebagai berikut : \n";
// foreach ($arr2['nun'] as $index => $nilai) {
// 	echo $no2++ . ". ". $nilai . "\n";
// }

// echo "\ndengan demikian dapat disimpulkan bahwa " . $arr2['keterangan'];



?>