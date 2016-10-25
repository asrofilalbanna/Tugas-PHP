<?php namespace read;

class allTampil
{
	public function jalan()
	{
		return "SELECT * FROM ";
	}
}

class tampilSis extends allTampil
{
	
	public static function tampilSiswa($id)
	{	
		$allTampil = new allTampil;
		$jalan = $allTampil->jalan().$id;
		$query  = mysql_query($jalan);
		while ($row=mysql_fetch_array($query))
	 	$data[]=$row;
	  	return $data;

	}
}

class tampilMat extends allTampil
{
	public static function tampilMatpel($id){
		$allTampil = new allTampil;
		$jalan = $allTampil->jalan().$id;
		$query  = mysql_query($jalan);
		while ($row=mysql_fetch_array($query))
	 	$data[]=$row;
	  	return $data;
	}
}

class tampilNil

{
	public static function tampilNilai($id){
		$jalan = "SELECT nilai.id_nilai, siswa.nama, matpel.matpel, nilai.nilai from siswa, matpel, nilai
					where nilai.nis = siswa.nis and nilai.id_matpel = matpel.id_matpel";
		$query  = mysql_query($jalan);
		while ($row=mysql_fetch_array($query))
	 	$data[]=$row;
	  	return $data;
	}
}

?>
