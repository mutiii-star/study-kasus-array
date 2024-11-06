<?php
    $hostname = "localhost";
    $user = "root";
    $pass = "";
    $db = "informasi_siswa";
    $koneksi = mysqli_connect($hostname, $user, $pass, $db);
    if($koneksi) {
        
    }else {
        echo "Gagal Terkoneksi ke database";
    }
?>