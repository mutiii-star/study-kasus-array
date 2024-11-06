<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="vieport" content="width=device-width, initial-scale=1.0">
    <title>TUGASSSS</title>
</head>
<body>
    <from action="blablabla"method="post">
        <label>Tuliskan Kata</label>
        <textarea name="blabla" rowspan="3"></textarea>
        <button type="submit" name="getpost">munculkan kata</button>
</from>
<?php
if(isset($post["getpost"])) {
        $kata=$_post["kata"];
        echo"$kata";
    }
?>
</body>
</html>