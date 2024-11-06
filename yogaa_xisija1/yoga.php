<!DOCTYPE html>
<html>
<head>
 
    <title>LATIAN KUY</title>
</head>
<body>
    <form action= "" method = "post">
        <fieldset>
       <tabel> MY FORM </tabel> </br>
       
       <label for="NIK">NIK</label>
        <input type="text" name="NIK:" id="NIK" required> </p>
        
       <label for="NAMA">NAMA</label>
       <input type="text" name="NAMA:" id="NAMA" required> </p>

       <label for="jeniskelamin">jeniskelamin</label>
       <input type="radio" name="jeniskelamin" value="laki-laki" required> Laki-laki
       <input type="radio" name="jeniskelamin" value="perempuan" required> perempuan
     
        <p>
             <label for="Kelas" required>Kelas</label>
        <select name="kelas" id="kelas">
        <option value="XI SIJA 1">XI SIJA 1</option>
        <option value="XI SIJA 2">XI SIJA 2</option>
        <option value="XI SIJA 3">XI SIJA 3</option>
        <option value="XI SIJA 4">XI SIJA 4</option>
</select>

  <p>
    <label for="ALAMAT">ALAMAT</label>
  <Textarea name ="alamat" id="alamat"> </textarea><br></br>

        <input type= "submit" name="submit" value="Tambah"> 

        

        

       
  
</form>
<?php
if(isset($_POST['submit']) ){
    $NIK = $_POST['NIK'];
    $NAMA = $_POST['NAMA'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $Kelas = $_POST['kelas'];
    $ALAMAT = $_POST['ALAMAT'];

    echo" saya yang bernama $NAMA,jeniskelamin,krlas </br> t";
}
?>
    
</body>
</html>