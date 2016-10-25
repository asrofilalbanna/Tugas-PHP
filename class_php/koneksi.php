<?php namespace connect;

class koneksi{

	public static function connectMySql(){ //konek
		
		mysql_connect('localhost','root', '');
		mysql_select_db('sekolah') or die("Database Tidak Ada");
	}
}
 ?>