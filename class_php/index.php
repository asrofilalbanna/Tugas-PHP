<?php  
namespace progres; // = proses.php

include 'koneksi.php';
include 'tambah.php';
include 'hapus.php';
include 'tampil.php';
include 'ubah.php';

use connect; //
use create; //
use read;
use update;
use delete;

// instance objek db
$db = new connect\koneksi;

// koneksi ke MySQL via method
$db->connectMySql();
?>

<a href="index.php?hal=siswa">Siswa</a> | 
<a href="index.php?hal=nilai">Nilai</a> |
<a href="index.php?hal=matpel">Matpel</a> |

<?php 
@ $hal = $_GET['hal'];
if ($hal == 'siswa'){
  include_once 'siswa.php';
} elseif ($hal == 'matpel') {
  include_once 'matpel.php';
} elseif ($hal == 'nilai') {
  include_once 'nilai.php';
} else {
  header('location:index.php?hal=siswa');
}

?>
