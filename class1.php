<?php
class Nilai {
	var $ratag;

	function rekap($kalimat) {
		$arr_klmt = explode (" ",$kalimat);
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

	function rataRata ($kalimat) {
		$arr_klmt = explode (" ",$kalimat);
		$arr_out = [];
		for ($i = 1; $i <=5 ; $i+=2) {
			array_push($arr_out, $arr_klmt[$i]);
		}
		echo "<pre>";
		$rata2 = array_sum($arr_out)/count($arr_out);
		$this->ratag = substr($rata2, 0, -11);
	}

	function tampil(){
		echo $this->ratag;
	}

}

$nilai = new Nilai;
$nilai->rekap("andi 10 budi 23 jono 31");
$nilai->rataRata("andi 10 budi 23 jono 31");
$nilai->tampil();
?>