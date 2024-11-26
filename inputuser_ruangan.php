<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_ruangan = $_POST['id_ruangan'];
$nama_ruangan = $_POST['nama_ruangan'];
$kapasitas = $_POST['kapasitas'];
$lokasi = $_POST['lokasi'];


// menginput data ke database
mysqli_query($koneksi, "INSERT INTO ruangan (id_ruangan, nama_ruangan, kapasitas,  lokasi) VALUES ('$id_ruangan', '$nama_ruangan',  '$kapasitas',  '$lokasi')");
 
// mengalihkan halaman kembali ke index.php
header("location:tampil_ruangan.php");
 
?>