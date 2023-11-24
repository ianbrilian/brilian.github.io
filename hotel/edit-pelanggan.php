<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
<h1>Edit Table Kamar</h1>
</header>
<div>

<?php
include 'koneksi.php';
$id_pelanggan= $_GET['id_pelanggan'];
$data = mysqli_query($koneksi,"SELECT * FROM pelanggan WHERE id_pelanggan='$id_pelanggan'");
while($tampil=mysqli_fetch_array($data)){
?> <center>
<form method="post" action="edit-aksi-pelanggan.php">
<table class="styled-table" border="1">

    <tr>
        <td>id_pelanggan</td>
        <td><input type="number" name="id_pelanggan" value="<?php echo $tampil['id_pelanggan']; ?>"></td>
    </tr>
    <tr>
        <td>nama_pelanggan</td>
        <td><input type="text" name="nama_pelanggan" value="<?php echo $tampil['nama_pelanggan']; ?>"></td>
    </tr>
    <tr>
        <td>alamat</td>
        <td><input type="text" name="alamat" value="<?php echo $tampil['alamat']; ?>"></td>
    </tr>
    <tr>
        <td>telepon</td>
        <td><input type="text" name="telepon" value="<?php echo $tampil['telepon']; ?>"></td>
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