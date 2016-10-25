<?php
// memanggil file koneksi
include 'proses.php';

// instance objek db
$db = new database();

// koneksi ke MySQL via method
$db->connectMySql();

// proses hapus data
if (isset($_GET['aksi'])) {
    if ($_GET['aksi'] == 'hapus') {
        // baca ID dari parameter ID Anggota yang akan dihapus
        $id = $_GET['id_agt'];

        // proses hapus data anggota berdasarkan ID via method
        $db->hapusAnggota($id);
    } elseif ($_GET['aksi'] == 'tambah') {
        echo"<br>
				<form method=POST action='?aksi=tambahAnggota'>
				<table>
				<tr><td>Nama</td><td><input type=text name='nama'></td></tr>
				<tr><td>Alamat</td><td><input type=text name='alamat'></td></tr>
				<tr><td>Telpon</td><td><input type=text name='telpon'></td></tr>
                <tr><td>Jenis Kelamin</td><td><input type=radio name='jk' value='1'>Laki laki<input type=radio name='jk' value='2'>Perempuan</td></tr>
				<tr><td></td><td><input type=submit value='simpan'></td></tr>
				</table>
				</form>
				";

    } elseif ($_GET['aksi'] == 'tambahAnggota') {
        $values = "null, '$_POST[nama]', '$_POST[alamat]', '$_POST[telpon]', '$_POST[jk]'";
        $table  = 'tsiswa';
        $db->tambahAnggota($tabel, $values);
    }
// proses edit data
    else if ($_GET['aksi'] == 'edit') {
        // baca ID anggota yang akan diedit
        $id = $_GET['id_agt'];

// menampilkan form edit anggota pakai method bacaDataAnggota()
        ?>	

        <form method="post" action="?aksi=updateAnggota">
            <table>
                <tr><td>Nama Anggota</td><td>:</td>
                    <td><input type="text" name="nama" value="<?php echo $db->bacaDataAnggota('nama', $id); ?>"></td>
                </tr>
                <tr><td>Alamat</td><td>:</td>
                    <td><input type="text" name="alamat" value="<?php echo $db->bacaDataAnggota('alamat', $id); ?>" size="40"></td>
                </tr>
                <tr><td>Telpon</td><td>:</td>
                    <td><input type="text" name="telpon" value="<?php echo $db->bacaDataAnggota('telpn', $id); ?>"></td>
                </tr>
                <tr><td>Jenis Kelamin</td><td>:</td>
                    <td>
                        <input type="radio" name="jk" value="1" <?php $j0k = $db->bacaDataAnggota('jk', $id); if ($j0k == 1){echo "checked=checked";} else {echo "";}?>">Laki-Laki 
                        <input type="radio" name="jk" value="2" <?php $j0k = $db->bacaDataAnggota('jk', $id); if ($j0k == 2){echo "checked=checked";} else {echo "";}?>">Perempuan
                    </td>
                </tr>   
            </table>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" name="submit" value="Update">
        </form>

        <?php

    } else if ($_GET['aksi'] == 'updateAnggota') {
        // proses update data anggota
        $id     = $_POST['id'];
        $nama   = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $telpon = $_POST['telpon'];
        $jk     = $_POST['jk'];

        // update data via method
        $db->updateDataAnggota($id, $nama, $alamat, $telpon, $jk);
    }
}
include_once('panggil.php');

echo "</table>";
?>