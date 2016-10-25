<?php 
$number = $_POST;
echo "<pre>";
print_r($number);

// echo $number['nilai'][0];

echo "Rata-rata = ".array_sum($number['nilai'])/10 ."<br>";
	
?>