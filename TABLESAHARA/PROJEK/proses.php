
<?php
    include ("koneksi.php");
    $table = mysqli_query ($koneksi, "select * from karyawan1");
    echo"
    <table border=1 >
        <tr>
           <td>NIK</td>
           <td>NAMA</td>
           <td>JABATAN</td>
           <td>ALAMAT</td>
        </tr>
";
    while ($result = mysqli_fetch_array($table)){
        echo" <tr>
                 <td$result[NIK]</td>
                 <td$result[NAMA]</td>
                 <td$result[JABATAN]</td>
                 <td$result[ALAMAT]</td>
              </tr>";
    }
    echo "</table>";
?>