<?php
    include("connection.php");
    $query = mysqli_query($connection, "select*from tb_guru");
    echo "
    <a href='inputpage.php'>input data</a>
        <table border=1>
            <tr>
                <td>no</td>
                <td>Nip</td>
                <td>Nama Guru</td>
                <td>Mata pelajaran</td>
        </tr>"; $no=1;
        while($result = mysqli_fetch_array($query)){
            echo" <tr>
                    <td>$no</td>
                    <td>$result[NIP]</td>
                    <td>$result[NAMA]</td>
                    <td>$result[MAPEL]</td>
                </tr>";
            $no++;
        };
    echo"</table>";
?>