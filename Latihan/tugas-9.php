<?php 

// Tugas 9
$nama  = ['Thoni','Budi', 'Anto','Joko','Andik'];
$benda = ['Piring', 'Gelas', 'Sendok'];

for ($i=1; $i<(count($arr2)) ; $i++) { 
 	if ($i<=3){
 		echo $arr2[$i] . "\n";
	}	
}

echo $nama[0] . " membawa " . $benda[0] . " dan " . $benda[1] . ", sedangkan " . $nama[3] . " membawa " . $benda[2] . " bersama " . $nama[1] . ", " . $nama[2] . " dan " . $nama[4] . "."; 


?>