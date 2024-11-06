<?php
    $table = mysqli_query($koneksi, "select * from tb_karyawan");
    $row = isset($_GET['row'])?$_GET['row']:"";
    if ($row=="") {
    echo"
    <a href='?Page=karyawan&row=addkaryawan'>Tambah</a>
    <table border=1>
        <tr>
            <td>id</td>
            <td>nama</td>
            <td>alamat</td>
            <td>jabatan</td>
            <td>option</td>
        </tr>
    ";
    while ($result = mysqli_fetch_array($table)) {
        echo "
        <tr>
            <td>$result[id]</td>
            <td>$result[nama]</td>
            <td>$result[alamat]</td>
            <td>$result[jabatan]</td>
            <td>
            <a href='?Page=karyawan&row=editkaryawan&idkaryawan=$result[id]'>Edit</a><br>
            <a href='?Page=karyawan&row=deletekaryawan&idkaryawan=$result[id]'>Delete</a><br>
            </td>
        </tr>
        ";
    }
    echo "</table>";
} else if ($row == "addkaryawan"){ ?>
    <form action="" method="POST">
    <fieldset>
    <table>
        <div class="container" align="left">
        <tr>
            <td>id</td>
            <td>:</td>
            <td><input type="text" name="id" size="30"></td>
        </tr>
        <tr>
            <td>nama</td>
            <td>:</td>
            <td><input type="text" name="nama" size="30"></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>:</td>
            <td><select name="jabatan" value="<?=$data['jabatan'];?>">
                       <option value="<?=$data['jabatan'];?>"><?$data['jabatan'];?></option>
                       <option value="HRD">HRD</option>
                       <option value="MANAJER PRODUK">MANAJER PRODUK</option>
                       <option value="MANAJER PEMASARAN">MANAJER PEMASARAN</option>
                       <option value="TI">TI</option>
                </select></td>
        </tr>
        <tr>
            <td>alamat</td>
            <td>:</td>
            <td><textarea name="alamat" size="30"></textarea></td>
        </tr>
            <td><input type="submit" name="submit" value="Daftar"></td>
        </table>
    </form> <?php
    if(isset($_POST['submit'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jabatan = $_POST['jabatan'];

        $proses = mysqli_query($koneksi, "INSERT INTO tb_karyawan (id, nama, alamat, jabatan) values ('$id', '$nama', '$alamat', '$jabatan')");
    if($proses) {
        ?> <script> alert ('Berhasil menambah data'); window.location='?Page=karyawan';</script> <?php
    } else {
        ?> <script> alert ('Gagal menambah data'); window.location='?Page=karyawan';</script> <?php
    }
    }
} else if ($row =="editkaryawan") {
    $id = $_GET['idkaryawan'];
    $cari = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tb_karyawan WHERE id='$id'"));
    if ($cari == 0) {
        ?><script> alert('Data tidak ditemukan'); window.location='?Page=karyawan';</script><?php
    } else {
        $data=mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM tb_karyawan WHERE id='$id'"));?>
        <form action="" method="POST">
            <table>
                <div class="container" align="left">
                <tr>
                    <td>id</td>
                    <td>:</td>
                    <td><input type="text" name="id" size="30" value= "<?=$data['id'];?>"/></td>
                </tr>
                <tr>
                    <td>nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" size="30" value= "<?=$data['nama'];?>"/></td>
                </tr>
                <tr>
                    <td>alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat" size="30" rowspan='3'><?=$data['alamat'];?></textarea></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td><select name="jabatan" value= "<?=$data['jabatan'];?>" >
                        <option value="<?=$data['jabatan'];?>"><?=$data['jabatan'];?></option>
                        <option value="HRD">HRD</option>
                        <option value="MANAJER PRODUK">MANAJER PRODUK</option>
                        <option value="MANAJER PEMASARAN">MANAJER PEMASARAN</option>
                        <option value="TI">TI</option>
                    </select></td>
                </tr>
                <tr>
                    <td colspan="3" align="right">
                    <input type="hidden" name="id" value="<?=$data['id'];?>">
                    <button type="submit" name="update" value="edit">Submit</td>
            </table>
        </form> <?php   
        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $jabatan = $_POST['jabatan'];
            $alamat = $_POST['alamat'];

            $proses = mysqli_query($koneksi, "UPDATE tb_karyawan SET nama='$nama', alamat='$alamat', jabatan='$jabatan' WHERE id='$id'");
            if($proses) {
                ?><script>alert("Data berhasil diupdate!"); window.location='?Page=karyawan'; </script><?php
            } else {
                ?><script>alert("Data gagal diupdate!"); window.location='?Page=karyawan'; </script><?php
            }

        }
    }
} else if ($row=="deletekaryawan") {
    $id = $_GET['idkaryawan'];
    $prosesdelete = mysqli_query($koneksi, "DELETE from tb_karyawan WHERE id='$id'");
    if ($prosesdelete) {
    ?><script>alert("berhasil delete data"); window.location='?Page=karyawan'; </script><?php
} else {
    ?><script>alert("gagal delete data"); window.location='?Page=karyawan' ; </script><?php
}
} else {
    echo "section not found";
}
?>