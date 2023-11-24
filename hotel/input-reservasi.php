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
<form method="post" action="input-aksi-reservasi.php">
    <table class="styled-table" border="1">
        
            <tr>
                <td>id_reservasi</td>
                <td><input type="text" name="id_reservasi" class ="input-field"></td>
            </tr>
            <tr>
                <td>id_kamar</td>
                <td><input type="text" name="id_kamar" class ="input-field"></td>
            </tr>
            <tr>
                <td>id_pelanggan</td>
                <td><input type="text" name="id_pelanggan" class ="input-field"></td>
            </tr>
            <tr>
                <td>id_pegawai</td>
                <td><input type="text" name="id_pegawai" class ="input-field"></td>
            </tr>
            <tr>
                <td>tanggal_cekin</td>
                <td><input type="date" name="tanggal_cekin" class ="input-field"></td>
            </tr>
            <tr>
                <td>tanggal_cekout</td>
                <td><input type="date" name="tanggal_cekout" class ="input-field"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN" class = "submit-button"></td>
                </tr>
</center>
</div>
        </table>
    </form>
</div>
</head>
</html>