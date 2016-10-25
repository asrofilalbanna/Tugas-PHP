
<?php
echo "<!DOCTYPE html><html><head><title>Latihan function</title></head></html>";

function tambah($nilai1, $nilai2)
{
	return $total=$nilai2+$nilai1;
}
echo "Tambah = ".$tambah1=tambah(10,2)."<br>";

function bagi($bagi)
{
	return $bagi/2;
}
echo "Bagi = ".$bagi1=bagi($tambah1)."<br>";

function kali($kali)
{
	return $kali*2;
}
echo "Kali = ".$kali1=kali($bagi1)."<br>";






?>