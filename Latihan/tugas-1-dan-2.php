<?php
// STRING
$str1 = 'Hello Word';
$str2 = 'hello word';
echo strtoupper($str1 . ' - strtoupper'); // membuat semua tulisan menjadi huruf balok
echo "\n"; echo "<br>";
echo strtolower($str1 . ' - strtolower'); // membuat semua tulisan menjadi huruf kecil
echo "\n"; echo "<br>";
echo ucfirst($str2 . ' - ucfirst'); // membuat huruf awal kalimat menjadi besar
echo "\n"; echo "<br>";
echo ucwords($str2 . ' - ucwords'); // membuat semua awal huruf kalimat menjadi besar
echo "\n"; echo "<br>";
echo lcfirst($str1 . ' - lcfirst'); // membuat akhir kalimat menjadi besar
echo "<br>";
 // --------------------------------------------------------

echo substr($str1, -1) . "\n";echo "<br>";
// echo substr($str1, -4) . "\n";
// echo substr($str1, -4, 2) . "\n";
echo "\n";

//tugas 1
$val3 = substr($str1, -4);
echo lcfirst(strtoupper($val3));echo "<br>";
echo "\n";
//tugas 2
$val5 = substr($str1, 2, 3);
echo ucfirst($val5). ' ';
echo substr($str1, -4, 3);
?>