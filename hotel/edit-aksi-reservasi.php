<?php
include 'koneksi.php';

$id_reservasi = $_POST['id_reservasi'];
$id_kamar = $_POST['id_kamar'];
$id_pelanggan = $_POST['id_pelanggan'];
$id_pegawai = $_POST['id_pegawai'];
$tanggal_cekin = $_POST['tanggal_cekin'];
$tanggal_cekout = $_POST['tanggal_cekout'];

mysqli_query($koneksi,"UPDATE reservasi SET id_reservasi='$id_reservasi', id_kamar='$id_kamar',
id_pelanggan='$id_pelanggan',id_pegawai='$id_pegawai',tanggal_cekout='$tanggal_cekin',tanggal_cekout='$tanggal_cekout' WHERE id_reservasi='$id_reservasi'");
header("location: reservasi.php"); 

?>