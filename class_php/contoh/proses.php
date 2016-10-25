<?php  
// setelah progres.php jadi proses.php tidak dijalankan lagi
	class database{
		var $dbhost = "localhost";
		var $dbuser = "root" ;
		var $dbpass = "" ;
		var $dbname = "sekolah" ;

		function connectMySql(){ //konek
			
			mysql_connect($this->dbhost,$this->dbuser,$this->dbpass);
			mysql_select_db($this->dbname) or die("Database Tidak Ada");
		}
		
		
		function tambahAnggota($tabel, $values){
			$query = "insert into $tabel values ($values)";
			$hasil = mysql_query($query);
			if($hasil){
				echo "<meta http-equiv='refresh' content='0;url=index.php'";
			}
			else
			{
				// echo $values;
				echo "Gagal menambah siswa";
			}
		}

		function tampilAnggota(){
				$query = mysql_query("SELECT * FROM tsiswa");
				while ($row=mysql_fetch_array($query))
			 	$data[]=$row;
			  	return $data;
		}

		function hapusAnggota($id){
			$query = mysql_query("DELETE FROM tsiswa WHERE nis='$id'");
			echo "Data sudah di hapus";
		}
		
		function updateDataAnggota($id,$nama,$alamat,$telpon,$jk){
			$query = mysql_query("UPDATE tsiswa SET nama='$nama',alamat='$alamat',telpn='$telpon',jk='$jk' WHERE nis=$id");
			echo "Berhasil!";
			
		}
		function bacaDataAnggota($filed,$id){
			$query = mysql_query("SELECT * FROM tsiswa WHERE nis='$id'");
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
?>