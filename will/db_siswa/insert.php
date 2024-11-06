<?php
include("koneksi.php");?>
<from action=""method="post">
    <table>
        <tr>
            <td>Nama Kelas </td>
            <td widt="5px">:</td>
            <td><input type="text" name="kelas" request/>
</tr>
<tr>
    <td>Jurusan </td>
    <td>:</td>
    <td> <select name="jurusan" required>
        <option value=""> pilih jurusan</option>
        <option value="SIJA"> sija</option>
        <option value="PBS"> pbs </option>
</select>
</td>
</tr>
<tr>
    <td>jenjang</td>
    <td>:</td>
    <td> <input type="radio" name="jenjang" value="10" required/> 10 <br>
         <input type="radio" name="jenjang" value="11" rquired/> 11 <br>
         <input type="radio" name="jenjang" value="12" required/> 12
    </td>
</tr>
<tr>
    <td colspan="3" align="right">
    <button type= "submit" nama="proses">
        proses insert
</button>
</td>
</tr>
</table>
</from>
<?php
if(isset($_POST['proses'])){
    $kelas=$_POST['kelas'];
    $jurusan=$_POST['jurusan'];
    $jenjang=$_POST['jenjang'];
    $Query="insert into table_kelas
    (nama_kelas,kode_jurusan,jenjang)
    values
    ('$kelas','$jurusan','$jenjang')
    ";
    $posesinsert=mysqli_query($koneksi,$Query);
    if($prosesinsert){
        echo"berhasil tambah data <a href='view.php'>kembali</a>";
    }else{
            echo"gagal tambah data <a href='view.php'>kembali</a>";
        }
    }
?>