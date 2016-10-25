<?php namespace create;

class allTambah
{
	public function jalan()
	{
		return "INSERT INTO ";
	}
}

class tambahSis extends allTambah
{

	public static function tambahSiswa($tabel, $values){

		$allTambah = new allTambah;

		$jalan = $allTambah->jalan().$tabel." values (".$values.")";
		$hasil = mysql_query($jalan);
		if($hasil){
			echo "<meta http-equiv='refresh' content='0;url=index.php?hal=matpel'";
		}
		else
		{
			echo "Gagal menambah siswa";
		}
	}
}

class tambahMat extends allTambah{

	public static function tambahMatpel($tabel, $values){
		$allTambah = new allTambah;

		$jalan = $allTambah->jalan().$tabel." values (".$values.")";
		$hasil = mysql_query($jalan);
		if($hasil){
			echo "<meta http-equiv='refresh' content='0;url=index.php?hal=matpel'";
		}
		else
		{
			echo "Gagal menambah matpel";
		}
	}
}

class tambahNil extends allTambah{

	public static function tambahNilai($tabel, $values){
		$allTambah = new allTambah;

		$jalan = $allTambah->jalan().$tabel." values (".$values.")";
		$hasil = mysql_query($jalan);
		if($hasil){
			echo "<meta http-equiv='refresh' content='0;url=index.php?hal=nilai'";
		}
		else
		{
			echo "Gagal menambah nilai";
		}
	}
}

?>