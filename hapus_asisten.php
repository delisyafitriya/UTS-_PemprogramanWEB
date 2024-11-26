<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_asisten = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE from asistenlab where id_asisten='$id_asisten'");

 
// mengalihkan halaman kembali ke index.php
header("location:tampil_asisten.php");
 
?>