<td rowspan="3" align="center"><a href="?page=menu1">menu 1</a><br><br>
<a href="?page=menu2">menu 2</a><br><br>
<a href="?page=menu3">menu 3</a><br><br>
</tr>
<td align="center" height="70%">

<?php
$page = ISSET($_GET['page'])?$_GET['page']:" ";
if($page==""||$page=="menu1") {
    echo"This content menu1";
}elseif($page=="menu2") {
    echo"This content menu2";
}elseif($page=="menu3") {
    echo"This content menu3";
}else{
    echo"page not found";
}
?>
</td>