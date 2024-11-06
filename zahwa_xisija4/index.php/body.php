<?php
$page = isset($_GET['page'])?$_GET['page']:"";
if($page=="menu1" || $page==""){
    include("halaman1.php");
}else if($page=="menu2"){
    echo"halaman menu2";
}else if($page=="menu3"){
    echo"halaman menu3";
}else{
    echo"content tidak ditemukan";
}
?>