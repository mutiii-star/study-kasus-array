<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF -8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kelas</title>
    <style>
        table {
            border-collapse: collapse;
        }
        </style>
</head>
<body>
    <form action="" method="POST">
    <fieldset>      
        <table>
            <tr>
                <td collspan="3" align="center">Data Kelas</td>
            </tr>
            <tr>
                    <td>Nama Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="nama" size="20"></td>
            </tr>
            <tr>
                    <td>Jenjang</td>
                    <td>:</td>
                    <td><input type="radio" name="Jenjang" size="10"> 10
                    <br>
                    <input type="radio" name="Jenjang" size="11"> 11
                    <br>
                    <input type="radio" name="Jenjang" size="12"> 12</td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><select name="jurusan">
                        <option value=""></option>
                        <option value="PPLG">PPLG</option>
                        <option value="MPLB">MPLB</option>
                        <option value="AKL">AKL</option>
                        <option value="TMI">TMI</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td>:</td>
                    <td><textarea name="Keterangan"></textarea></td>
                </tr>
                    <td colspan="3" align="right"><input type="submit" name="submit" value="Proses"></td>
                    <td>
                    </td>
                    <?php
                    if(isset($_POST["submit"])) {
                    $nama=$_POST["nama"];
                    echo"$nama          ";
                    $jenjang=$_POST["jenjang"];
                    echo"jenjang :  ";
                    $jurusan=$_POST["jurusan"];
                    $alamat=$_POST["alamat"];
                    echo"jurusan 
                    echo"$jurusan" ;
                    $isi=$_POST["isi"];
                    echo"<br> Keterangan : ";
                    echo"$isi";
                ?>
                </td>
            </table>
        </form>
    </body>
</html>