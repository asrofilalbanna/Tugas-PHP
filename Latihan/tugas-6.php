<?php

for ($i=1; $i <=3 ; $i++) { 
	$j = $i%2;
	if ($j==1) {
		echo $i . " - Ganjil\n";
		for ($k=1; $k <=3 ; $k++) { 
			echo "ganjil".$k."\n";
		}
	} else {
		echo $i . " - Genap \n";
	}
	
}

?>