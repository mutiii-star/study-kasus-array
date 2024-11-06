<?php
$page=isset($_GET['page'])?$_GET['page']:"";
if($page==""||$page=='menu1'){
    echo"this containt menu1";
}elseif($page=="menu2"){  
    echo"this containt menu2";
}elseif($page=="menu3"){
    echo"this containt menu3";
}else{
    echo"page not found";
}
?>
