<?php
$page=isset($_GET["page"])?$_GET["page"]:"";

 if($page=="menu1"||$page==""){
    echo"this for contyaint menu 1";
}elseif($page=="menu2"){
    echo"this for contyaint menu 2";
}elseif($page=="menu3"){
        echo"this for contyaint menu 3";
}else{
    echo"No page found";
}
?>
