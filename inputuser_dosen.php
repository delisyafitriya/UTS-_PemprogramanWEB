<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nidn = $_POST['nidn'];
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];

// menginput data ke database
mysqli_query($koneksi, "INSERT INTO dosen (nidn, nama, gender,  email, telepon, alamat) VALUES ('$nidn', '$nama',  '$gender',  '$email', '$telepon', '$alamat')");
 
// mengalihkan halaman kembali ke index.php
header("location:tampil_dosen.php");
 
?>