<?php

// class Hewan
// {

// 	function makan()
// 	{
// 		return " Sedang makan";
// 	}

// 	function tampil($hewan)
// 	{
// 		echo $hewan . $this->makan();
// 	}
// }
 
// $hewan = new hewan('bebek');

// $awal=10;
// class kendaraan 
// {

// 	function isiBensin($nilai1)
// 	{
// 		echo $isi = $nilai1+2;
// 		// "bensin diisi jadi = " . $isi;
// 	}

// 	// function jalan($nilai2)
// 	// {	
// 	// 	$jalan=$nilai2-1;
// 	// 	echo "bensin tinggal = " . $jalan=$nilai2-1 . "<br>";
// 	// }

// 	// function jalan1($nilai3)
// 	// {	
// 	// 	$proses = $this->jalan($niali2);
// 	// 	$jalan=$proses-1;
// 	// 	echo "bensin tinggal = " . $jalan=$proses-1 . "<br>";
// 	// }

// }

// $jalan = new kendaraan(10);


class Nilai {
var $arr_out;
function rekap () {
	$kalimat = 'andi 10 budi 23 jono 31';
	$GLOBALS; $arr_klmt = explode (" ",$kalimat);
	for ($i = 0; $i <count($arr_klmt) ; $i++) {
		if (! is_numeric($arr_klmt[$i])) {
			$arr_out[$arr_klmt[$i]] = '';
		} else {
			$arr_out[$arr_klmt[$i-1]] = $arr_klmt[$i];
		}
		
	}
	echo "<pre>";
	print_r ($arr_out);
}
// rekap();

function rataRata()
{
	$kalimat = 'andi 10 budi 23 jono 31';
	$arr_klmt = explode (" ",$kalimat);
	$arr_out = [];
	for ($i = 1; $i <=5 ; $i+=2) {
		array_push($arr_out, $arr_klmt[$i]);
	}
	echo "<pre>";
	$rata2 = array_sum($arr_out)/count($arr_out);
	echo substr($rata2, 0, -11);
}
// rataRata()
}

$nilai = new Nilai();


?>