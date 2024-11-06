<?php
    include ("koneksimysql.php");
    $table = mysqli_query($koneksi, "select*from tb_siswa");
    echo "
    <table border=1
         <tr>
            <td>NIS</td>
            <td>Nama</td>
            <td>Kelas</td>
            <td>Alamat</td>
        <tr>
    ";
    while ($result = mysqli_fetch_array($table)) {
        echo" <tr>
                 <td>$result[NIS]</td>
                 <td>$result[Nama]</td>
                 <td>$result[Kelas]</td>
                 <td>$result[Alamat]</td>
              </tr> ";
    }
    echo "</table>";
?>