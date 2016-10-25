<?php
class pegawai
{
	var $gaji = 160000;
}

class staff extends pegawai
{

	public static function kehadiran($kehadiran = '')
	{
		$hadir = 100000;
		echo "Gaji dosen = ";
		echo $hadir_total = $kehadiran*$hadir+$this->gaji."\n";

	}
}

class dosen extends pegawai
{
	public function sks($sks = '')
	{
		$matakul = 140000;
		echo "Gaji staff = ";
		echo $sks_total = $sks*$matakul+$this->gaji;

		
	}
}

$staff = new staff();
$dosen = new dosen();
$staff->kehadiran(2);
$dosen->sks(2);
?>