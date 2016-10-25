<?php
// memanggil file koneksi
include 'class.php';

// instance objek db
$db = new database();

// koneksi ke MySQL via method
$db->connectMySql();

// proses hapus data
if (isset($_GET['aksi'])) {
    if ($_GET['aksi'] == 'hapus') {
        // baca ID dari parameter ID Siswa yang akan dihapus
        $id = $_GET['id_sis'];

        // proses hapus data Siswa berdasarkan ID via method
        $db->hapusSiswa($id);
    } elseif ($_GET['aksi'] == 'tambah') {
        echo"<br>
				<form method=POST action='?aksi=tambahSiswa'>
				<table>
				<tr><td>Nama</td><td><input type=text name='nama'></td></tr>
				<tr><td>Alamat</td><td><input type=text name='alamat'></td></tr>
				<tr>
                    <td>Jenis Kelamin</td>
                    <td><input type=radio name='jk' value=1>Laki-laki
                        <input type=radio name='jk' value=2>Perempuan
                    </td>
                </tr>
				<tr><td></td><td><input type=submit value='simpan'></td></tr>
				</table>
				</form>
				";
    } elseif ($_GET['aksi'] == 'tambahSiswa') {
        $nama = $_POST['nama_s'];
        $alamat = $_POST['alamat_s'];
        $jk = $_POST['jk'];
        $db->tambahSiswa($nama, $alamat, $jk);
    }
// proses edit data
    else if ($_GET['aksi'] == 'edit') {
        // baca ID Siswa yang akan diedit
        $id = $_GET['id_sis'];

// menampilkan form edit Siswa pakai method bacaDataSiswa()
        ?>	

        <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>?aksi=update">
            <table>
                <tr><td>Nama Siswa</td><td>:</td>
                    <td><input type="text" name="nama" value="<?php echo $db->bacaDataSiswa('nama', $id); ?>"></td>
                </tr>
                <tr><td>Alamat</td><td>:</td>
                    <td><input type="text" name="alamat" value="<?php echo $db->bacaDataSiswa('alamat', $id); ?>" size="40"></td>
                </tr>
                <tr><td>Telpon</td><td>:</td>
                    <td><input type="text" name="telpon" value="<?php echo $db->bacaDataSiswa('jk', $id); ?>"></td>
                </tr>	
            </table>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" name="submit" value="Update Data">
        </form>

        <?php
    } else if ($_GET['aksi'] == 'update') {
        // proses update data Siswa
        $id = $_POST['id_sis'];
        $nama = $_POST['nama_s'];
        $alamat = $_POST['alamat_s'];
        $jk = $_POST['jk'];

        // update data via method
        $db->updateDataSiswa($id, $nama, $alamat, $jk);
    }
}
include_once('panggil.php');

echo "</table>";
?>