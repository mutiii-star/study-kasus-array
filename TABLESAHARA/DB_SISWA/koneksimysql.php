<?php
    $hostname = "localhost";
    $user = "root";
    $pass = "";
    $db = "db_siswa";
    $koneksi = mysqli_connect($hostname, $user, $pass, $db);
    if($koneksi) {
        echo "Berhasil Terkoneksi ke Database";
    }else {
        echo "Gagal Terkoneksi ke database";
    }
?>