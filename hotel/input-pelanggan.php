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
<form method="post" action="input-aksi-pelanggan.php">
    <table class="styled-table" border="1">
        
            <tr>
                <td>id_pelanggan</td>
                <td><input type="number" name="id_pelanggan" class ="input-field"></td>
            </tr>
            <tr>
                <td>nama_pelanggan</td>
                <td><input type="text" name="nama_pelanggan" class ="input-field"></td>
            </tr>
            <tr>
                <td>alamat</td>
                <td><input type="text" name="alamat" class ="input-field"></td>
            </tr>
            <tr>
                <td>telepon</td>
                <td><input type="number" name="telepon" class ="input-field"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN" class ="input-field"></td>
                </tr>
</center>
</div>
        </table>
    </form>
</div>
</head>
</html>