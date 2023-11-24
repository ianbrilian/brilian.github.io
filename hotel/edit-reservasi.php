<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
<h1>Edit Table Reservasi</h1>
</header>
<div>

<?php
include 'koneksi.php';
$id_reservasi= $_GET['id_reservasi'];
$data = mysqli_query($koneksi,"SELECT * FROM reservasi WHERE id_reservasi='$id_reservasi'");
while($tampil=mysqli_fetch_array($data)){
?> <center>
<form method="post" action="edit-aksi-reservasi.php">
<table class="styled-table" border="1">

    <tr>
        <td>id_reservasi</td>
        <td><input type="number" name="id_reservasi" value="<?php echo $tampil['id_reservasi']; ?>"></td>
    </tr>
    <tr>
        <td>id_kamar</td>
        <td><input type="text" name="id_kamar" value="<?php echo $tampil['id_kamar']; ?>"></td>
    </tr>
    <tr>
        <td>id_pelanggan</td>
        <td><input type="text" name="id_pelanggan" value="<?php echo $tampil['id_pelanggan']; ?>"></td>
    </tr>
    <tr>
        <td>id_pegawai</td>
        <td><input type="text" name="id_pegawai" value="<?php echo $tampil['id_pegawai']; ?>"></td>
    </tr>
    <tr>
        <td>tanggal_cekin</td>
        <td><input type="text" name="tanggal_cekin" value="<?php echo $tampil['tanggal_cekin']; ?>"></td>
    </tr>
    <tr>
        <td>tanggal_cekout</td>
        <td><input type="text" name="tanggal_cekout" value="<?php echo $tampil['tanggal_cekout']; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
    </div>
</table>
</form>
<?php
}
?>
</body>