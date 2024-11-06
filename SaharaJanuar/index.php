<!DOCTYPE html>
<html lag="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="" method="post">
        <label> PLEASE BE HAPPY </label>
        <textarea name="katatext" colspan="3" rowspan="3" placeholder="masukan kata/kalimat">
        </textarea>
        <button type="submit" name="gettext"> Get Text </button>
</form>
<?php
if (isset ($_POST["gettext"])) {
   $text = $_POST["katatext"];
   echo "PLEASE BE HAPPY </br> $text";
}
?>
</body>
</htmlq