<?php 


// deletes\hapus::hapusSiswa();
if (isset($_GET['aksi'])) {
    if ($_GET['aksi'] == 'hapus') {
        // baca ID dari parameter ID Siswa yang akan dihapus
        $id = $_GET['id_nilai'];
		$tabel = $_GET['hal'];
        // proses hapus data Siswa berdasarkan ID via method
        delete\hapusNil::hapusNilai($tabel, $id);
    }

    elseif ($_GET['aksi'] == 'tambah') {

        echo"<br>
                <form method=POST action='?hal=nilai&aksi=tambahNilai'>
                <table>
                <tr><td>Nama Siswa</td>
                    <td>
                        <select name='nama_sis' >";
$sqlSis = mysql_query('SELECT * FROM siswa');                        
while($dataSis = mysql_fetch_array($sqlSis)){?>
                             <option value="<?php echo $dataSis['nis'];?>"><?php echo $dataSis['nama'];?></option>";
<?php 
}
        echo "          </select>
                    </td>
                </tr>
                <tr><td>Nama Matpel</td>
                    <td>
                        <select name='nama_mat' >";
$sqlMat = mysql_query('SELECT * FROM matpel');                          
while($dataMat = mysql_fetch_array($sqlMat)){?>
                             <option value="<?php echo $dataMat['id_matpel'];?>"><?php echo $dataMat['matpel'];?></option>";
<?php 
}
        echo "          </select>
                    </td>
                </tr>
                <tr><td>Nilai</td><td><input type='text' name='nilai'></td></tr>
                <tr><td></td><td><input type=submit value='Simpan'></td></tr>
                </table>
                </form>
                ";

    } 

    elseif ($_GET['aksi'] == 'tambahNilai') {
        $values = "null, '$_POST[nama_sis]', '$_POST[nama_mat]', '$_POST[nilai]'";
        $tabel  = 'nilai';
        create\tambahNil::tambahNilai($tabel, $values);
    }
// proses edit data
    else if ($_GET['aksi'] == 'edit') {
        // baca ID Siswa yang akan diedit
        $id = $_GET['id_nilai'];

// menampilkan form edit Siswa pakai method bacaDataSiswa()
        ?>  
        <form method="post" action="?hal=nilai&aksi=updaNilai">
            <table>
                <tr><td>Nama Siswa</td><td>:</td>
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
$arrayNil = read\tampilNil::tampilNilai($id);

echo"</table> <br> <a href='?hal=nilai&aksi=tambah'>TAMBAH</a>";
echo "<table border='1' cellpadding='5'>
      <tr><th>No</th>
           <th>Nama Siswa</th>
           <th>Nama Matpel</th>
           <th>Nilai</th>
           <th>Aksi</th>
       </tr>";
$i = 1;
if($arrayNil){
foreach ($arrayNil as $data) {
    echo "<tr><td>" . $i . "</td>
               <td>" . $data['nama'] . "</td>
               <td>" . $data['matpel'] . "</td>
               <td>" . $data['nilai'] . "</td>";
    echo"      </td>
               <td><a href='" . $_SERVER['PHP_SELF'] . "?hal=nilai&aksi=edit&id_nilai=" . $data['id_nilai'] . "'>Edit</a>  |
                   <a href='" . $_SERVER['PHP_SELF'] . "?hal=nilai&aksi=hapus&id_nilai=" . $data['id_nilai'] . "' >Hapus</a></td>
            </tr>";
    $i++;
}
}
else{
    echo "data kosong";
}

echo "</table>";

?>