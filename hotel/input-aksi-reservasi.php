<?php
include "koneksi.php";

$id_reservasi= $_POST['id_reservasi'];
$id_kamar = $_POST['id_kamar'];
$id_pelanggan = $_POST['id_pelanggan'];
$id_pegawai = $_POST['id_pegawai'];
$tanggal_cekin = $_POST['tanggal_cekin'];
$tanggal_cekout = $_POST['tanggal_cekout'];

mysqli_query($koneksi, "INSERT INTO reservasi VALUES('$id_reservasi','$id_kamar','$id_pelanggan','$id_pegawai','$tanggal_cekin','$tanggal_cekout')");
header("location:reservasi.php");
?>