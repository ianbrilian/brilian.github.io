
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
            <center><h2>Informasi Reservasi</h2></center>
            <p style="text-align:center">Di sini anda dapat melihat informasi tentang reservasi</p>
        </div>
    <center>
<table class="styled-table" border="1">
    <tr>
        <th>id_reservasi</th>
        <th>id_kamar</th>
        <th>id_pelanggan</th>
        <th>id_pegawai</th>
        <th>tgl_masuk</th>
        <th>tgl_keluar</th>
        <th>Hapus</th>
        <th>Edit</th>
    </tr>

    <?php
        include "koneksi.php";
        $kamar=mysqli_query($koneksi,"SELECT * FROM reservasi");  
        while($tampil=mysqli_fetch_array($kamar)){
            
    ?>
    <tr>
        <td> <?php echo $tampil['id_reservasi'] ?></td>
        <td> <?php echo $tampil['id_kamar'] ?></td>
        <td> <?php echo $tampil['id_pelanggan'] ?></td>
        <td> <?php echo $tampil['id_pegawai'] ?></td>
        <td> <?php echo $tampil['tanggal_cekin'] ?></td>
        <td> <?php echo $tampil['tanggal_cekout'] ?></td>
        <td> <a href="hapus-reservasi.php?id_reservasi=<?php echo $tampil ['id_reservasi']; ?>" class="button1">Hapus</a></td>
        <td><a href="edit-reservasi.php?id_reservasi=<?php echo $tampil ['id_reservasi']; ?>" class="button">Edit</a></td>
    </tr>

    <?php
    }
    ?>

</table>
</center>
<a href="input-reservasi.php" class="button2">Tambahkan Data Baru</a>

</body>
</html>