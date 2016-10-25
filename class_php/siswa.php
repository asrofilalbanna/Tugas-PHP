<?php 


// deletes\hapus::hapusSiswa();
if (isset($_GET['aksi'])) {
    if ($_GET['aksi'] == 'hapus') {
        // baca ID dari parameter ID Siswa yang akan dihapus
        $id = $_GET['id_sis'];
        $tabel = $_GET['hal'];
        // proses hapus data Siswa berdasarkan ID via method
        delete\hapusSis::hapusSiswa($tabel, $id);
    }

    elseif ($_GET['aksi'] == 'tambah') {
        echo"<br>
                <form method=POST action='?hal=siswa&aksi=tambahSiswa'>
                <table>
                <tr><td>Nama</td><td><input type=text name='nama'></td></tr>
                <tr><td>Alamat</td><td><input type=text name='alamat'></td></tr>
                <tr><td>Telpon</td><td><input type=text name='telpon'></td></tr>
                <tr><td>Jenis Kelamin</td><td><input type=radio name='jk' value='1'>Laki laki<input type=radio name='jk' value='2'>Perempuan</td></tr>
                <tr><td></td><td><input type=submit value='Simpan'></td></tr>
                </table>
                </form>
                ";

    } 

    elseif ($_GET['aksi'] == 'tambahSiswa') {
        $values = "null, '$_POST[nama]', '$_POST[alamat]', '$_POST[telpon]', '$_POST[jk]'";
        $tabel  = 'siswa';
        create\tambahSis::tambahSiswa($tabel, $values);
    }
// proses edit data
    else if ($_GET['aksi'] == 'edit') {
        // baca ID Siswa yang akan diedit
        $id = $_GET['id_sis'];

// menampilkan form edit Siswa pakai method bacaDataSiswa()
        ?>  
        <form method="post" action="?hal=siswa&aksi=updateSiswa">
            <table>
                <tr><td>Nama Siswa</td><td>:</td>
                    <td><input type="text" name="nama" value="<?php echo update\bacaUbahSis::bacaSiswa('nama', $id); ?>"></td>
                </tr>
                <tr><td>Alamat</td><td>:</td>
                    <td><input type="text" name="alamat" value="<?php echo update\bacaUbahSis::bacaSiswa('alamat', $id); ?>" size="40"></td>
                </tr>
                <tr><td>Telpon</td><td>:</td>
                    <td><input type="text" name="telpon" value="<?php echo update\bacaUbahSis::bacaSiswa('telpn', $id);  ?>"></td>
                </tr>
                <tr><td>Jenis Kelamin</td><td>:</td>
                    <td>
                        <input type="radio" name="jk" value="1" <?php $j0k = update\bacaUbahSis::bacaSiswa('jk', $id);  if ($j0k == 1){echo "checked=checked";} else {echo "";}?>">Laki-Laki 
                        <input type="radio" name="jk" value="2" <?php $j0k = update\bacaUbahSis::bacaSiswa('jk', $id);  if ($j0k == 2){echo "checked=checked";} else {echo "";}?>">Perempuan
                    </td>
                </tr>   
            </table>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" name="submit" value="Update">
        </form>

        <?php

    } else if ($_GET['aksi'] == 'updateSiswa') {
        // proses update data Siswa
        $id     = $_POST['id'];
        $nama   = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $telpon = $_POST['telpon'];
        $jk     = $_POST['jk'];

        // update data via method
        update\ubahSis::updateSiswa($id, $nama, $alamat, $telpon, $jk);
    }
    
}

echo "<table>";

// buat array data Siswa dari method tampilSiswa()
$id = $_GET['hal'];
$arraySiswa = read\tampilSis::tampilSiswa($id);

echo"</table> <br> <a href='?hal=siswa&aksi=tambah'>TAMBAH</a>";
echo "<table border='1' cellpadding='5'>
      <tr><th>No</th>
           <th>Nama Siswa</th>
           <th>Alamat</th>
           <th>Telpon</th>
           <th>Jenis Kelamin</th>
           <th>Aksi</th>
       </tr>";
$i = 1;
if($arraySiswa){
foreach ($arraySiswa as $data) {
    echo "<tr><td>" . $i . "</td> 
               <td>" . $data['nama'] . "</td>
               <td>" . $data['alamat'] . "</td>
               <td>" . $data['telpn'] . "</td>
               <td>";
               if ($data['jk'] == 2){
                    echo "Perempuan";
               } else {
                  echo "Laki-laki";
               }
    echo"      </td>
               <td><a href='" . $_SERVER['PHP_SELF'] . "?hal=siswa&aksi=edit&id_sis=" . $data['nis'] . "'>Edit</a>  |
                   <a href='" . $_SERVER['PHP_SELF'] . "?hal=siswa&aksi=hapus&id_sis=" . $data['nis'] . "' >Hapus</a></td>
            </tr>";
    $i++;
}
}
else{
    echo "data kosong";
}

echo "</table>";



?>