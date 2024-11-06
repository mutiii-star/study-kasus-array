<?php
$page = isset($_GET['page'])?$_GET['page']:"";
if($page=="" || $page=="dashboard"){
    include ("content/dashboard.php");
}else if($page=="data_barang"){
    include ("content/data_barang.php");
}else if($page=="penjualan"){
    include ("content/data_penjualan.php");
}else if($page=="transaksi"){
    include ("content/data_transaksi.php");
}else{
    echo"content tidak ditemukan";
}
?>