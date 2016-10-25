<?php

echo "<table>";

// buat array data anggota dari method tampilAnggota()
$arrayanggota = $db->tampilAnggota();

echo"</table> <br> <a href='?aksi=tambah'>TAMBAH</a>";
echo "<table border='1' cellpadding='5'>
      <tr><th>No</th>
           <th>Nama Siswa</th>
           <th>Alamat</th>
           <th>Telpon</th>
           <th>Jenis Kelamin</th>
           <th>Aksi</th>
       </tr>";
$i = 1;
if($arrayanggota){
foreach ($arrayanggota as $data) {
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
               <td><a href='" . $_SERVER['PHP_SELF'] . "?aksi=edit&id_agt=" . $data['nis'] . "'>Edit</a> |
                   <a href='" . $_SERVER['PHP_SELF'] . "?aksi=hapus&id_agt=" . $data['nis'] . "'>Hapus</a></td>
            </tr>";
    $i++;
}
}
else{
    echo "data kosong";
}
echo "</table>";
?>