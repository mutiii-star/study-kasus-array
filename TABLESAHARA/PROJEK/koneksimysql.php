
<?php
    $hostname = "localhost";
    $user = "root";
    $pass = "";
    $db = "karyawan";
    $koneksi = mysqli_connect($hostname, $user, $pass, $db);
    if($koneksi) {
        echo "";
    }else {
        echo "Gagal Terkoneksi ke database";
    }
?>