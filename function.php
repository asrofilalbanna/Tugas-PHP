<?php
// tanpa nilai balik (return value)
// function tambah1()
// {
// 	echo "Ini fungsi tambah1"."<br>";
// }

// // menggunakan nilai balik (return value)
// function tambah2()
// {
// 	return "Ini fungsi tambah2"."<br>";
// }

// tambah1()."<br>";
// tambah2()."<br>"; // tidak menampilkan isi dari tambah2
// echo tambah2()."<br>";

function tambah($nilai1, $nilai2)
{
	$total=$nilai2+$nilai1;
	echo $total;
}

// tambah(19,2)."<br>";

$str = "Joni makan tempe";

$nilai3=10;

// saya ingin mengalikan nilai 10 dengan 2 tapi menggunakan function

//kemudian hasil dari perkalian tersebut akan ditampilan dilayar menggunakan function juga

function kali($nilai){
	$out = $nilai*2;
	
	return $out;
}

function tampilkan($hasil_akhir){
	echo "Hasil akhir adalah = " . $hasil_akhir;
}

$hasil = kali($nilai3);

echo 'nilai dari function kali = ' . $hasil . '<br>';

tampilkan($hasil);

?>