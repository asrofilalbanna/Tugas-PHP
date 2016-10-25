<?php

// tugas 3
$val = 'umur saya 24.5 tahun';

$umur1 = substr($val, -10, 4);
echo $umur1 . "\n";

$kali = $umur1*3;
$pangkat  = pow($kali, 2);
$total = ceil($pangkat);
echo $kali  . "\n";
echo $pangkat  . "\n";
echo $total . "\n";
?>