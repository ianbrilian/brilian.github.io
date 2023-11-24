<head>
    <link rel="stylesheet" href="style.css">
    <style>
        table {
            margin-top: 10%;
        }
    </style>
</head>
<body>
<header>
        <h1>Input data baru</h1>
    </header>
    <div>
<center>
    <form method="post" action="input-aksi-pegawai.php">
    <table class="styled-table" border="1">
            <tr>
                <td>id_pegawai</td>
                <td><input type="number" name="id_pegawai"></td>
            </tr>
            <tr>
                <td>nama_pegawai</td>
                <td><input type="text" name="nama_pegawai"></td>
            </tr>
            <tr>
                <td>jabatan</td>
                <td><input type="text" name="jabatan"></td>
            </tr>
            <tr>
                <td>gaji</td>
                <td><input type="number" name="gaji"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
</center>
</div>
        </table>
    </form>
</div>
</head>
</html>