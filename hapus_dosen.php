<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$nidn = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE from dosen where nidn='$nidn'");

 
// mengalihkan halaman kembali ke index.php
header("location:tampil_dosen.php");
 
?>