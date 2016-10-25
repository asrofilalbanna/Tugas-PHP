<?php namespace update;

class ubahSis
{
	public static function updateSiswa($id,$nama,$alamat,$telpon,$jk){
			$query = mysql_query("UPDATE siswa SET nama='$nama',alamat='$alamat',telpn='$telpon',jk='$jk' WHERE nis=$id");
			header('location:index.php?hal=siswa');
	}

	
}

class bacaUbahSis {
	public static function bacaSiswa($filed,$id){
			$query = mysql_query("SELECT * FROM siswa WHERE nis='$id'");
			$data = mysql_fetch_array($query);
			if($filed == 'nama'){
				return $data['nama'];
			}
			else if($filed == 'alamat'){
				return $data['alamat'];
			}
			else if($filed == 'telpn'){
				return $data['telpn'];
			}
			elseif ($filed == 'jk'){
				return $data['jk'];
			}
		}
}

class ubahMat
{
	public static function updateMatpel($id,$nama){
			$query = mysql_query("UPDATE matpel SET matpel='$nama' WHERE id_matpel=$id");
			header('location:index.php?hal=matpel');
	}

	
}

class bacaUbahMat {
	public static function bacaMatpel($filed,$id){
			$query = mysql_query("SELECT * FROM matpel WHERE id_matpel='$id'");
			$data = mysql_fetch_array($query);
			if($filed == 'matpel'){
				return $data['matpel'];
			}
		}
}
?>
