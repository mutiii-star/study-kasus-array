<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIODATA</title>
</head>
<body>
    <form action="" method="POST">
        <fieldset>
            <legend align="center">Form Biodataku</legend>
            <table>
                <tr>
                    <td>Nama Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="nama" size="30"></td>
                </tr>
                <tr>
                    <td>Tempat lahir</td>
                    <td>:</td>
                    <td><input type="text" name="tempat_lahir" size="30"></td>
                </tr>
                <tr>
                    <td>Tanggal lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal_lahir"></td>
                </tr>
                <tr>
                    <td>Tinggi badan</td>
                    <td>:</td>
                    <td><input type="number" name="tinggi_badan"> cm</td>
                </tr>
                <tr>
                    <td>Berat badan</td>
                    <td>:</td>
                    <td><input type="number" name="berat_badan"> kg</td>
                </tr>
                <tr>
                    <td>Jenis kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jenis_kelamin" value="Laki-Laki"> Laki-Laki
                        <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                        </td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                        <select name="agama">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat"></textarea></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><input type="submit" name="submit" value="Daftar"></td>
                </tr>
            </table>
        </fieldset>
    </form>

    <!-- Biodata Container -->
    <td width="50%" valign="top">
               
               <?php
                   if(isset($_POST["submit"])){
                       $Nama = htmlspecialchars($_POST["nama"]);
                       $tempatlhr = htmlspecialchars($_POST["tempat_lahir"]);
                       $tanggallhr = htmlspecialchars($_POST["tanggal_lahir"]);
                       $beratbdn = htmlspecialchars($_POST["berat_badan"]);
                       $tinggibdn = htmlspecialchars($_POST["tinggi_badan"]);
                       $jkl = htmlspecialchars($_POST["jenis_kelamin"]);
                       $Agama = htmlspecialchars($_POST["agama"]);
                       $Alamat = htmlspecialchars($_POST["alamat"]);

                       echo "<p align=\"center\">Biodata</p>";
                       echo "<p><strong>Nama:</strong> $Nama</p>";
                       echo "<p><strong>Tempat Lahir:</strong> $tempatlhr</p>";
                       echo "<p><strong>Tanggal Lahir:</strong> $tanggallhr</p>";
                       echo "<p><strong>Berat Badan:</strong> $beratbdn kg</p>";
                       echo "<p><strong>Tinggi Badan:</strong> $tinggibdn cm</p>";
                       echo "<p><strong>Jenis Kelamin:</strong> $jkl</p>";
                       echo "<p><strong>Agama:</strong> $Agama</p>";
                       echo "<p><strong>Alamat:</strong> $Alamat</p>";
                   } else {
               
                   }
               ?>
           </td>
       </tr>


</body>
</html>
    


