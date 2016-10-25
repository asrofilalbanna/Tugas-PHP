<?php namespace delete;

class allHapus 
{
	public function jalan()
	{
		return "DELETE FROM ";
	}
}

class hapusSis {

	public static function hapusSiswa($tabel, $id){
		$allHapus = new allHapus;
		$jalan = $allHapus->jalan().$tabel." WHERE nis=".$id;
		$query = mysql_query($jalan);
		header('location:index.php?hal=siswa');
	}
}

class hapusMat {

	public static function hapusMatpel($tabel, $id){
		$allHapus = new allHapus;
		$jalan = $allHapus->jalan().$tabel." WHERE id_matpel=".$id;
		$query = mysql_query($jalan);
		header('location:index.php?hal=matpel');
	}
}

class hapusNil {

	public static function hapusNilai($tabel, $id){
		$allHapus = new allHapus;
		$jalan = $allHapus->jalan().$tabel." WHERE id_nilai=".$id;
		$query = mysql_query($jalan);
		header('location:index.php?hal=nilai');
	}
}
?>

