<?php

class partai {

	var $ratag;
	var $partai = [
	  		'pdi' => 0,
	  		'pkb' => 0,
	  		'ppp' => 0,
	  		'hanura' => 0,
	  		'golkar' => 0,
	  	];

	function voting($voting){

		foreach ($this->partai as $key1 => $value1) {
			if ($voting == $key1){
				$this->partai[$key1] = $value1+1;	
			}
		}

		echo "<pre>";
		$this->ratag = $this->partai;
	}


	function hasil(){
		print_r ($this->ratag);
	}

}

$partai = new partai;
$partai->voting('pdi');
$partai->voting('pdi');
$partai->voting('golkar');
$partai->hasil();













































?>



