<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIODATA</title>
</head>
<body>
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <!-- Form Container -->
            <td width="50%" valign="top">
                <form action="" method="POST">
                    <legend align="center">Form Biodataku</legend>
                    <p><b>Biodata</b></p>
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><input type="text" name="nama" size="30"></td>
                        </tr>
                        <tr>
                            <td>Tempat lahir</td>
                            <td>:</td>
                            <td><input type="text" name="tempat_lahir" size="30" required></td>
                        </tr>
                        <tr>
                            <td>Tanggal lahir</td>
                            <td>:</td>
                            <td><input type="date" name="tanggal_lahir" required></td>
                        </tr>
                        <tr>
                            <td>Tinggi Badan</td>
                            <td>:</td>
                            <td><input type="number" name="tinggi_badan" required> cm</td>
                        </tr>
                        <tr>
                            <td>Berat Badan</td>
                            <td>:</td>
                            <td><input type="number" name="berat_badan" step="0.1" required> kg</td>
                        </tr>
                        <tr>
                            <td>Kelamin</td>
                            <td>:</td>
                            <td>
                                <input type="radio" name="jenis_kelamin" value="Laki-Laki"> Laki-Laki
                                <br>
                                <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                            </td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td>
                                <select name="agama" required> 
                                    <option value="">Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="konghucu">konghucu</optio>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><textarea name="alamat" required></textarea></td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center"><input type="submit" name="submit" value="Daftar"></td>
                        </tr>
                    </table>
                </form>
            </td>

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
    </table>
</body>
</html>