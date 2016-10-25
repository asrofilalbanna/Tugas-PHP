<?php

echo "<table>";

// buat array data anggota dari method tampilAnggota()
$arraysiswa = $db->tampilSiswa();

echo"</table> <br> <a href='?aksi=tambah'>TAMBAH</a>";
echo "<table border='1' cellpadding='5'>
      <tr><th>No</th>
           <th>Nama Siswa</th>
           <th>Alamat</th>
           <th>Jenis Kelamin</th>
           <th>Aksi</th>
       </tr>";
$i = 1;
if($arraysiswa){
foreach ($arraysiswa as $data) {
    echo "<tr><td>" . $i . "</td> 
          	   <td>" . $data['nama_s'] . "</td>
               <td>" . $data['alamat_s'] . "</td>
               <td>" . $data['jk'] . "</td>
               <td><a href='" . $_SERVER['PHP_SELF'] . "?aksi=edit&id_agt=" . $data['id_siswa'] . "'>Edit</a> |
                   <a href='" . $_SERVER['PHP_SELF'] . "?aksi=hapus&id_sis=" . $data['id_siswa'] . "'>Hapus</a></td>
            </tr>";
    $i++;
}
}
else{
    echo "data kosong";
}
echo "</table>";
?>