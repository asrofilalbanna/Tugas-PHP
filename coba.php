<?php

// echo "pilih yes or no : ";
// $handle = fopen("php://stdin","r");
// $line = fgets($handle);
// if(trim($line) != 'yes') {
// 	echo "Aborting \n";
// 	exit;
// }

// fclose($handle);
// echo "\n";
// echo "thanks \n";
class partai {

	var $ratag;
	var $partai = [
	  		'pdi' => 0,
	  		'pkb' => 0,
	  		'ppp' => 0,
	  		'hanura' => 0,
	  		'golkar' => 0,
	  	];

	function pilih($pilih){
		$handle = fopen("php://stdin","r");
		$line = fgets($handle);
		$pilih = trim($line);
		echo "\n";
		$pilih1= $pilih-1;
		$out = [];

		foreach ($this->partai as $key1 => $value1) {
			$out[]=$key1; 
		}

		foreach ($out as $key2 => $value2) {
			if ($pilih1 == $key2){
				$this->partai[$value2] = $this->partai[$value2]+1;	
			}
		}
	}
}

echo "
List partai :
1. pdi
2. pkb
3. ppp
4. hanura
5. golkar";

echo "\n Pilih partai 1~5 : ";

$partai = new partai;
$partai->pilih($pilih);










// $handle = fopen("php://stdin","r");
// $line = fgets($handle);
// // echo trim($line);
// $pilih = trim($line);
// echo "\n";
// $pilih1= $pilih-1;
// $out = [];

// 	foreach ($partai as $key1 => $value1) {
// 	$out[]=$key1; 

// 	}

// 	foreach ($out as $key2 => $value2) {
// 		if ($pilih1 == $key2){
// 			$partai[$value2] = $partai[$value2]+1;	
// 		}
// 	}

// 		print_r($partai);

?>