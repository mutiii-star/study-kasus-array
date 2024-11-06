<?php
    $Page=ISSET($_GET['Page'])?$_GET['Page']:"";

    if ($Page=="dashboard" || $Page==" ") {
        include('content/dasboard.php');

    } elseif ($Page=="barang" || $Page=="") {
        include('content/databarang.php');

    } elseif ($Page=="barangmasuk" || $Page=="") {
        include('content/barangmasuk.php');      

    } elseif ($Page=="barngKeluar" || $Page=="") {
        include('content/barangkeluar.php');

    } else {
        echo "menu tidak di temukan";
    
    }
    
?>