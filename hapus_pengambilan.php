<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_pengambilanprk = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE from pengambilan_prk where id_pengambilanprk='$id_pengambilanprk'");

 
// mengalihkan halaman kembali ke index.php
header("location:tampil_pengambilan.php");
 
?>