<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <h1>Edit Kamar</h1>
    </header>
    <div>


<?php
include 'koneksi.php';
$id_kamar= $_GET['id_kamar'];
$data = mysqli_query($koneksi,"SELECT * FROM kamar WHERE id_kamar='$id_kamar'");
while($tampil=mysqli_fetch_array($data)){
?> <center>
<form method="post" action="edit-aksi-kamar.php">
<table class="styled-table" border="1">
    
    <tr>
        <td>id_kamar</td>
        <td><input type="number" name="id_kamar" value="<?php echo $tampil['id_kamar']; ?>"></td>
    </tr>
    <tr>
        <td>nama_kamar</td>
        <td><input type="text" name="nama_kamar" value="<?php echo $tampil['nama_kamar']; ?>"></td>
    </tr>
    <tr>
        <td>tipe_kamar</td>
        <td><input type="text" name="tipe_kamar" value="<?php echo $tampil['tipe_kamar']; ?>"></td>
    </tr>
    <tr>
        <td>harga</td>
        <td><input type="text" name="harga" value="<?php echo $tampil['harga']; ?>"></td>
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