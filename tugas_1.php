<?php

// No. 1

for ($i=1; $i <= 10 ; $i++) { 
	if ($i<6){
		echo "Angka - " . $i . "\n";
	}
}

echo "-------- \n";

// No. 2

for ($i=1; $i <= 10 ; $i++) { 
	if ($i>5){
		echo "Angka - " . $i . "\n";
	}
}

echo "-------- \n";

// No. 3

for ($i=1; $i <= 10 ; $i++) { 
	if ($i%2 == 0){
		echo "Angka Genap - " . $i . "\n";
	}
}

echo "-------- \n";

// No. 4

for ($i=1; $i <= 10 ; $i++) { 
	if ($i%2 == 1){
		echo "Angka Ganjil - " . $i . "\n";
	}
}

echo "-------- \n";

// No. 5

for ($i=1; $i <= 50 ; $i++) { 
	if ($i%4 == 0){
		echo "Kelipatan - " . $i . "\n";
	}
}
?>