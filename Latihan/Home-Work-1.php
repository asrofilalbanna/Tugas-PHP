<?php 

$arr1 = [
	['A','B','C'],
	[1, 2, 3, 4, 5, 6],
	['Joko', 'Budi', 'Yuni']
]; 

echo $arr1[2][0] . " mempunyai anak sebanyak ". $arr1[1][3] ." orang sekelas dengananaknya " . $arr1[2][2] . " yaitu di kelas " . $arr1[0][0] . ", mereka menambahkan 
	angka " . $arr1[1][1] . "," . $arr1[1][2] . " dan " . $arr1[1][3] . " menjadi " . 
	($arr1[1][3]+$arr1[1][4]) . ". " . $arr1[2][1] .  " menjumlahkan angka " . $arr1[1][4] . " dan " . 
	$arr1[1][5] . " menjadi " . ($arr1[1][5]+$arr1[1][4]) . ". ";

?>