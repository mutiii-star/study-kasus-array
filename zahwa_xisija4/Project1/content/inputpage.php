        <table>
            <tr>
                <td>Nama_Barang</td>
                <td width="Spx">:</td>
                <td><input type="text" name="Nama_Barang" required/></td>
            </tr>
            <tr>
                <td>Jumlah_Stok/td>
                <td>:</td>
                <td><input type="text" name="Jumlah_Stok" required/></td>
            </tr>

            <tr>
            <td>Harga_Barang</td>
                <td>:</td>
                <td><input type="text" name="Harga_Barang" required/></td>
            </tr>

            <tr>
                <td colspan=3><button type="Submit"name="Proses">Proses Input</button>
                <a href='?page=data_barang'>Kembali</a>
                </td>
                </tr>
            </table>
        </form>
<?php
    if(isset($_POST['proses'])){
        $Nama_Barang = $_POST['Nama_Barang'];
        $Jumlah_Stok = $_POST['Jumlah_Stok'];
        $Harga_Barang = $_POST['Harga_Barang'];
        $Query = "  INSERT INTO tb_stokbarang (Nama_Barang, Jumlah_Stok, Harga_Barang) VALUES ('$Nama_Barang', '$Jumlah_Stok', '$Harga_Barang')";
        $insert = mysqli_query ($connection, $Query);

        if($insert){
            echo"Berhasil insert data"</br>
            <a href='?page=data_barang'>Kembali</a>";
        } else {
            echo"Gagal insert data </br>
            <a href='viewtable.php'> Kembali</a>";
        }
    }
?>