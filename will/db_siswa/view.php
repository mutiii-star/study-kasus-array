<?php
include ("koneksi.php");
$kelas = mysqli_query ($koneksi, "Select *from table_kelas");
echo"
<a href = 'insert.php'> Tambah Data </a>
<table border 1> 
<tr>
<td> NO </td>
<td> kelas </td>
<td> jenjang </td>
<td> jurusan </td>
</tr> "; $no = 1;
while ($result = mysqli_fetch_array($kelas)){
    echo" <tr>
<td> $no </td>
<td> $result[nama_kelas] </td>
<td> $result[jenjang] </td>
<td> $result[kode_jurusan] </td>
</tr> ";
$no ++;
}
echo"</table>";
?>