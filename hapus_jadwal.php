<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_jadwal = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE from jadwal_prk where id_jadwal='$id_jadwal'");

 
// mengalihkan halaman kembali ke index.php
header("location:tampil_jadwal.php");
 
?>