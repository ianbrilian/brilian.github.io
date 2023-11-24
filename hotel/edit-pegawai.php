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
$id_pegawai= $_GET['id_pegawai'];
$data = mysqli_query($koneksi,"SELECT * FROM pegawai WHERE id_pegawai='$id_pegawai'");
while($tampil=mysqli_fetch_array($data)){
?> <center>
<form method="post" action="edit-aksi-pegawai.php">
<table class="styled-table" border="1">

    <tr>
        <td>id_pegawai</td>
        <td><input type="number" name="id_pegawai" value="<?php echo $tampil['id_pegawai']; ?>"></td>
    </tr>
    <tr>
        <td>nama_pegawai</td>
        <td><input type="text" name="nama_pegawai" value="<?php echo $tampil['nama_pegawai']; ?>"></td>
    </tr>
    <tr>
        <td>jabatan</td>
        <td><input type="text" name="jabatan" value="<?php echo $tampil['jabatan']; ?>"></td>
    </tr>
    <tr>
        <td>gaji</td>
        <td><input type="text" name="gaji" value="<?php echo $tampil['gaji']; ?>"></td>
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