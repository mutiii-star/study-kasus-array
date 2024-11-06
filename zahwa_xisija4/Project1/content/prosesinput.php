<?php
    include ("connection.php");
    if(isset($_POST['proses'])){
        $nama_branag =$_POST['Jumlah_Stok'];
        $jumlah_stok =$_POST['Nama_Barang'];
        $harga_barang =$_POST['Harga_Barang'];
        $query ="insert into tb_stokpenjualan
                (Jumlah_Stok, Nama_Barang, Harga_Barang) values
                ('$Jumlah_Stok', '$Nama_Barang', '$Harga_Barang')";
        $insert = mysqli_query($connection, $query);
        if($insert){
            echo"Berhasil insert data</br>
            <a href='inputpage.php'>Kembali<a/>";
        }else{
            echo"Gagal insert data</br>
            <a href='inputpage.php'>Kembali<a/>";
        }
    }