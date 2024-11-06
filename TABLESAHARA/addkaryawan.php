<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF -8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h2>Form Pendaftaran</h2></center>
    <form action="result.php" method="post>
        <table>
            <tr>
                <td>NIK</td>
                <td>:</td>
                <td><input type="text" name="NIK" size="30"></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td>:</td>
                <td><input type="text" name="KELAS" size="30"></td>
            </tr>
            <tr>
                <td>JABATAN</td>
                <td>:</td>
                <td><select name="JURUSAN">
                    <option value="HRD">HRD</option>
                    <option value="MANAJER PRODUK">MANAJER PRODUK</option>
                    <option value="MANAJER PRODUK">MANAJER PEMASARAN</option>
                    <option value="TI">TI</option>
                    </select></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="varchar" name="kelas" size="30"></td>
            </tr>
                <td><input type="submit" name="submit" value="Daftar"></td>
        </table>
    </form>
    <div style="position: absolute; right: 50px; top: 77px">
<?php
    if (ISSET($_POST["Submit"])) {
        $NIK = $_POST['NIK'];
        $NAMA = $_POST['NAMA'];
        $JABATAN = $_POST['JABATAN'];
        $ALAMAT = $_POST['ALAMAT'];

        echo " {$NIK} Nama {$Nama} <br>"
        echo "Jabatan {$Jabatan} <br>";
        echo "Alamat {$Alamat} <br>";
        echo "Telah berhasil melakukan pendaftaran! <br>";
}
?>
    </div>
</fieldset>
</body>
</html>