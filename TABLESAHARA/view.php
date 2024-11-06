<?php
    include ("koneksimysql.php");
    $table = mysqli_query($koneksi, "select*from karyawan");
    echo "
    <table border=1
         <tr>
            <td>NIK</td>
            <td>Nama</td>
            <td>Jabatan</td>
            <td>Alamat</td>
        <tr>
    ";
    while ($result = mysqli_fetch_array($table)) {
        echo" <tr>
                 <td>$result[NIK]</td>
                 <td>$result[Nama]</td>
                 <td>$result[Jabatan]</td>
                 <td>$result[Alamat]</td>
              </tr> ";
    }
    echo "</table>";
?>