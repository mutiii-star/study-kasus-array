<?php
$sw = isset($_GET['sw'])?$_GET['sw']:"";
if ($sw==""){ ?>
<a href="?page=databarang&sw=addbarang">tambah barang</a>
<table width ="70%" border= 1>
    <tr>
        <td>no</td>
        <td>nama_barang</td>
        <td>stock</td>
        <td>harga</td>
        <td>option</td>
    </tr>

    <?php $no=1;
    $query= mysqli_query($koneksi,"SELECT *FROM tb_barang");
    while($result=mysqli_fetch_array($query)){?>
    <tr>
        <td> <?=$no++;?></td>
        <td> <?=$result['nama_barang'];?></td>
        <td> <?=$result['stock'];?></td>
        <td> <?=$result['harga'];?></td>
    <td></td>
    </tr>
    <?php
    }?>
    </table>
    <?php 
}elseif($sw=="addbarang"){ ?>
<form action=""method="POST">
    <table>
        <tr>
            <td>nama barang</td>
            <td>:</td>
            <td><input type="text"name="nama_barang"/></td>
</tr>
<tr>
    <td>stock barang</td>
    <td>:</td>
    <td><input type="text"name="stock"/></td>
</tr>
<tr>
    <td>harga barang</td>
    <td>:</td>
    <td><input type="text"name="harga"/></td>
</tr>
<tr>
    <td colspan="3"align="right">
        <button type="sumbit"name="sumbit">
            ambatukam
</button>
</td>
</tr>
</table>
</form>
<?php
if(isset( $_POST['submit'])){
    $nama_barang=$_POST['nama_barang'];
    $stock=$_POST['stock'];
    $harga=$_POST['harga'];
    $proses=mysqli_query($koneksi,"INSERT INTO  tb_barang (nama_barang,stock,harga) values ('$nama_barang','$stock','$harga')");
    if($proses){
        ?><script>alert("barang berhasil ditambahkan");
        window.location="?page=databarang";
        </script><?php
    }else{
        ?><script>alert("gagal tambah barang");
        window.location= "?page=databarang";
        </script><?php
    }
}
}else{
    echo "content not found";
}
?>