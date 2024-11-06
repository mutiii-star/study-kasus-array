<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel 1</title>
</head>
<body>
    <table border="1" align="center" width="100%" height="940px">
        <tr>
            <td colspan="2" align="center" height="95px"><b>Header</td>
        </tr>
        <tr>
            <td rowspan="3" align="center"><a href="?page=Dashboard">Dashboard</a><br><br>
                <a href="?page=Karyawan">Karyawan</a><br><br>
                <a href="?page=Jabatan">Jabatan</a><br><br>
                <a href="?page=Tunjangan">Tunjangan</a><br><br>
                <a href="?page=Gaji">Gaji</a><br><br>
        </tr>
            <td align="center" height="70%">

 <?php
$page = ISSET($_GET['page'])?$_GET['page']:" ";
if($page==""||$page=="Dashboard") {
    echo"This content Dashboard";
}elseif($page=="Karyawan") {
    echo"This content Karyawan";
}elseif($page=="Jabatan") {
    echo"This content Jabatan";
}elseif($page=="Tunjangan") {
    echo"This content Tunjangan";
}elseif($page=="Gaji") {
    echo"This content Gaji";
}else{
    echo"page not found";
}
?>

            </td>
        </tr>
        <tr>
            <td colspan="3" align="center"><b>Footer</td>
        </tr>
    </table>
</body>
</html>