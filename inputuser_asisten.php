<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_asisten = $_POST['id_asisten'];
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];

// menginput data ke database
mysqli_query($koneksi, "INSERT INTO asistenlab (id_asisten, nama, gender,  email, telepon, alamat) VALUES ('$id_asisten', '$nama',  '$gender',  '$email', '$telepon', '$alamat')");
 
// mengalihkan halaman kembali ke index.php
header("location:tampil_asisten.php");
 
?>