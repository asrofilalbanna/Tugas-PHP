<?php 
	class database{
		var $dbhost = "localhost";
		var $dbuser = "root" ;
		var $dbpass = "" ;
		var $dbname = "univ" ;

		function connectMySql(){
			mysql_connect($this->dbhost,$this->dbuser,$this->dbpass);
			mysql_select_db($this->dbname) or die("Database Tidak Ada");
		}
		
		function tambahSiswa($nama,$alamat,$jk){
			$query = "INSERT INTO tb_siswa(nama,alamat,jk) VALUES ('$nama','$alamat','$jk')";
			$hasil = mysql_query($query);
			if($hasil){
				echo "<meta http-equiv='refresh' content='0;url=index.php'";
			}
			else
			{
				echo "gagal";
			}
		}

		function tampilSiswa(){
				$query = mysql_query("SELECT * FROM tb_siswa ORDER BY nama_s");
				while ($row=mysql_fetch_array($query))
			 	$data[]=$row;
			  	return $data;
		}

		function hapusSiswa($id){
			$query = mysql_query("DELETE FROM tb_siswa WHERE id_siswa='$id'");
			echo "Data sudah di hapus";
		}

		function updateDataSiswa($id,$nama,$alamat,$jk){
			$query = mysql_query("UPDATE tb_siswa SET nama_s='$nama',alamat_s='$alamat',jk='$jk' WHERE id_siswa='$id'");
			echo "Berhasil!";
			
		}

		function bacaDataSiswa($filed,$id){
			$query = mysql_query("SELECT * FROM tb_siswa WHERE id_siswa='$id'");
			$data = mysql_fetch_array($query);
			if($filed == 'nama_s')
				return $data['nama_s'];
			else if($filed == 'alamat_s')
				return $data['alamat_s'];
			else if($filed== 'jk')
				return $data['jk'];
		}
	}
?>