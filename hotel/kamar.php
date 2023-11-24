<html>
    <head>
    <link rel="stylesheet" type="text/css" href="style.css">
        <style>
        .styled-table{
            width: 90%;
        }
    </style>
    </head>
    <body>
    <header>
        <h1>Selamat datang di Dashboard Hotel</h1>
    </header>
    <nav>
        <ul>
            <li><a href="reservasi.php">Reservasi</a></li>
            <li><a href="pelanggan.php">Pelanggan</a></li>
            <li><a href="pegawai.php">Pegawai</a></li>
            <li><a href="kamar.php">Kamar</a></li>
        </ul>
    <br> <br>
    <div class="dashboard-box ">
            <center><h2>Informasi Kamar</h2></center>
            <p style="text-align:center">Di sini anda dapat melihat informasi tentang kamar</p>
        </div>
    <center>
    <table class="styled-table" border="1">
    <tr>
        <th>Id_Kamar</th>
        <th>Nama_Kamar</th>
        <th>Tipe_Kamar</th>
        <th>Harga</th>
        <th>Hapus</th>
        <th>Edit</th>
    </tr>

    <?php
        include "koneksi.php";
        $kamar=mysqli_query($koneksi,"SELECT * FROM kamar");  
        while($tampil=mysqli_fetch_array($kamar)){
            
    ?>
    <tr>
        <td> <?php echo $tampil['id_kamar'] ?></td>
        <td> <?php echo $tampil['nama_kamar'] ?></td>
        <td> <?php echo $tampil['tipe_kamar'] ?></td>
        <td> <?php echo $tampil['harga'] ?></td>
        <td> <a href="hapus-kamar.php?id_kamar=<?php echo $tampil ['id_kamar']; ?>" class="button1">Hapus</a></td>
        <td><a href="edit-kamar.php?id_kamar=<?php echo $tampil ['id_kamar']; ?>" class="button">Edit</a></td>
    </tr>

    <?php
    }
    ?>

</table>
</center>
<a href="input-kamar.php" class="button2">Tambahkan Data Baru</a>

</body>
</html>