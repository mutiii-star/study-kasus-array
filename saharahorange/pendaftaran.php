<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF -8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="contact.php" method="POST"></from>
    <fieldset>
        <legend align="center">Form Pendaftaran</legend>
        <table>
            <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" size="30"></td>
            </tr>
            <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="kelas" size="30"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><select name="jurusan">
                        <option value></option>
                        <option value="PPLG">PPLG</option>
                        <option value="MPLB">MPLB</option>
                        <option value="AKL">AKL</option>
                        <option value="TMI">TMI</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><input type="radio" name="Jenis Kelamin" value="Laki-Laki">Laki-Laki
                    <input type="radio" name="Jenis_Kelamin" value="Perempuan">Perempuan</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="Alamat"></textarea></td>
                </tr>
                <td><input type="submit" name="submit" value="daftar"></td>
        </table>
    </form>
</body>
</html>