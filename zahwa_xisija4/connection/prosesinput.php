<?php
    include ("connection.php");
    if(isset($_POST['proses'])){
        $NIP =$_POST['NIP'];
        $NAMA =$_POST['Nama'];
        $MAPEL =$_POST['Mapel'];
        $query ="insert into tb_guru(NIP, NAMA, MAPEL) values('$NIP', '$NAMA', '$MAPEL')";
        $insert = mysqli_query($connection, $query);
        if($insert){
            echo"Berhasil insert data</br>
            <a href='viewtable.php'>Kembali<a/>";
        }else{
            echo"Gagal insert data</br>
            <a href='viewtable.php'>Kembali<a/>";
        }
    }