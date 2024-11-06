<tr>
            <td rowspan="3" align="center" width="350px"><a href="?Page=dashboard">Dashboard</a><br><br>
                <a href="?Page=karyawan">Karyawan</a><br><br>
                <a href="?Page=jabatan">Jabatan</a><br><br>
                <a href="?Page=tunjangan">Tunjangan</a><br><br>
                <a href="?Page=gaji">Gaji</a><br><br>
        </tr>
            <td align="center" height="70%">

<?php
    $Page = isset($_GET['Page'])?$_GET['Page']:"";
    if($Page==""||$Page=="dashboard") {
       include("content/dashboard.php");
    } else if($Page=="karyawan") {
       include("content/karyawan.php");
    } else if($Page=="jabatan") {
        include("content/jabatan.php");
    } else if($Page=="tunjangan") {
        include("content/tunjangan.php");
    } else if($Page=="gaji") {
        include("content/gaji.php");
    } else {
        echo"page not found";
    }
?>
</td>