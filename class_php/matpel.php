<?php 


// deletes\hapus::hapusSiswa();
if (isset($_GET['aksi'])) {
    if ($_GET['aksi'] == 'hapus') {
        // baca ID dari parameter ID Siswa yang akan dihapus
        $id = $_GET['id_matpel'];
		$tabel = $_GET['hal'];
        // proses hapus data Siswa berdasarkan ID via method
        delete\hapusMat::hapusMatpel($tabel, $id);
    }

    elseif ($_GET['aksi'] == 'tambah') {
        echo"<br>
                <form method=POST action='?hal=matpel&aksi=tambahMatpel'>
                <table>
                <tr><td>Nama Matpel</td><td><input type=text name='nama'></td></tr>
                <tr><td></td><td><input type=submit value='Simpan'></td></tr>
                </table>
                </form>
                ";

    } 

    elseif ($_GET['aksi'] == 'tambahMatpel') {
        $values = "null, '$_POST[nama]'";
        $tabel  = 'matpel';
        create\tambahMat::tambahMatpel($tabel, $values);
    }
// proses edit data
    else if ($_GET['aksi'] == 'edit') {
        // baca ID Siswa yang akan diedit
        $id = $_GET['id_matpel'];

// menampilkan form edit Siswa pakai method bacaDataSiswa()
        ?>  
        <form method="post" action="?hal=matpel&aksi=updateMatpel">
            <table>
                <tr><td>Nama Matpel</td><td>:</td>
                    <td><input type="text" name="nama" value="<?php echo update\bacaUbahMat::bacaMatpel('matpel', $id); ?>"></td>
                </tr>
            </table>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" name="submit" value="Update">
        </form>

        <?php

    } else if ($_GET['aksi'] == 'updateMatpel') {
        // proses update data Siswa
        $id     = $_POST['id'];
        $nama   = $_POST['nama'];

        // update data via method
        update\ubahMat::updateMatpel($id, $nama);
    }
    
}

echo "<table>";

// buat array data Siswa dari method tampilSiswa()
$id = $_GET['hal'];
$arrayMatpel = read\tampilMat::tampilMatpel($id);

echo"</table> <br> <a href='?hal=matpel&aksi=tambah'>TAMBAH</a>";
echo "<table border='1' cellpadding='5'>
      <tr><th>No</th>
           <th>Nama Matpel</th>
           <th>Aksi</th>
       </tr>";
$i = 1;
if($arrayMatpel){
foreach ($arrayMatpel as $data) {
    echo "<tr><td>" . $i . "</td> 
               <td>" . $data['matpel'] . "</td>";
    echo"      </td>
               <td><a href='" . $_SERVER['PHP_SELF'] . "?hal=matpel&aksi=edit&id_matpel=" . $data['id_matpel'] . "'>Edit</a>  |
                   <a href='" . $_SERVER['PHP_SELF'] . "?hal=matpel&aksi=hapus&id_matpel=" . $data['id_matpel'] . "' >Hapus</a></td>
            </tr>";
    $i++;
}
}
else{
    echo "data kosong";
}

echo "</table>";

?>