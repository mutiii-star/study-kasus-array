<body>
    <form action="prosesinput.php" method="post">
        <table>
            <tr>
                <td>input NIP</td>
                <td width="Spx">:</td>
                <td><input type="text" name="NIP" required/></td>
            </tr>
            <tr>
                <td>input Nama</td>
                <td>:</td>
                <td><input type="text" name="Nama" required/></td>
            </tr>
            <tr>
                <td>input Mapel</td>
                <td>:</td>
                <td>
                    <select name="Mapel" required>
                        <option value="">Pilih Mapel</option>
                        <option value="Bahasa Inggris">Bahasa Inggris</option>
                        <option value="Agama">Agama</option>
                        <option value="Matematika">Matematika</option>
                        <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                        <option value="Bahasa Jerman">Bahasa Jerman</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan=3><button type="Submit"name="Proses"> Proses Input</button>
                </td>
            </tr>
    </table>
</body>
</form>