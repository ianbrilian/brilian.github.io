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
    </nav>
    <br> <br>
     <div class="dashboard-box ">
            <center><h2>Informasi Pelanggan</h2></center>
            <p style="text-align:center">Di sini anda dapat melihat informasi tentang pelanggan</p>
        </div>
    <center>
    <table class="styled-table" border="1">
    <tr class="judul">
        <th>id_pelanggan</th>
        <th>nama_pelanggan</th>
        <th>alamat</th>
        <th>telepon</th>
        <th>Hapus</th>
        <th>Edit</th>
    </tr>

    <?php
        include "koneksi.php";
        $kamar=mysqli_query($koneksi,"SELECT * FROM pelanggan");  
        while($tampil=mysqli_fetch_array($kamar)){
            
    ?>
    <tr>
        <td> <?php echo $tampil['id_pelanggan'] ?></td>
        <td> <?php echo $tampil['nama_pelanggan'] ?></td>
        <td> <?php echo $tampil['alamat'] ?></td>
        <td> <?php echo $tampil['telepon'] ?></td>
        <td> <a href="hapus-pelanggan.php?id_pelanggan=<?php echo $tampil ['id_pelanggan']; ?>" class="button1">Hapus</a></td>
        <td><a href="edit-pelanggan.php?id_pelanggan=<?php echo $tampil ['id_pelanggan']; ?>" class="button">Edit</a></td>
    </tr>

    <?php
    }
    ?>

</table>
</center>
<a href="input-pelanggan.php" class="button2">Tambahkan Data Baru</a>

</head>
</html>