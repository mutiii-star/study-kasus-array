<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "tb_guru";
    $connection = mysqli_connect($host, $user, $pass, $db);
    if($connection) {
        echo "Berhasil Terkoneksi ke Database";
    }else {
        echo "Gagal Terkoneksi ke database";
    }
?>  