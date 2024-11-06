<!DOCTYPE html>
<html>
<head>
    <title>Biodata Siswa</title>
</head>
<body>
    <h2 align="center">biodata ku</h2>
    <fieldset>
    <table>
    <form method="post" action="">
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
                    <td><input type="number" name="tinggi_badan" > cm</td>
                </tr>

              <tr>
                 <td>berat badan</td>
                 <td>:</td>
                 <td><input type="number" name="berat badan" > kg</td>
              </tr>

              <td>:</td>
                    <td><textarea name="alamat"></textarea></td>
                </tr>
                
                <tr>
                <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat"></textarea></td>
                </tr>
                
    </form>
    </table>
                                                                                                                          
    <?php 
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $tinggi_badan = $_POST['tinggi_badan'];
        $berat_badan = $_POST['berat_badan'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $alamat = $_POST['alamat'];

        echo "<h3>Data Biodata Siswa</h3>";
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr><td>Nama</td><td>$nama</td></tr>";
        echo "<tr><td>Tempat Lahir</td><td>$tempat_lahir</td></tr>";
        echo "<tr><td>Tanggal Lahir</td><td>$tanggal_lahir</td></tr>";
        echo "<tr><td>Tinggi Badan</td><td>$tinggi_badan cm</td></tr>";
        echo "<tr><td>Berat Badan</td><td>$berat_badan kg</td></tr>";
        echo "<tr><td>Jenis Kelamin</td><td>$jenis_kelamin</td></tr>";
        echo "<tr><td>Agama</td><td>$agama</td></tr>";
        echo "<tr><td>Alamat</td><td>$alamat</td></tr>";
        echo "</table>";
    }
    ?>


</body>
</html>
    