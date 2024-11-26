<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_ruangan = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE from ruangan where id_ruangan='$id_ruangan'");

 
// mengalihkan halaman kembali ke index.php
header("location:tampil_ruangan.php");
 
?>