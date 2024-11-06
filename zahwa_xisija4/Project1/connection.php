<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "db_penjualan";
    $connection = mysqli_connect($host, $user, $pass, $db);
    if($connection){
    } else{
        echo "gagal Terkoneksi ke database";
    }
?>  