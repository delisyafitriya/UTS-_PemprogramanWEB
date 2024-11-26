<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$semester = $_POST['semester'];
$gender = $_POST['gender'];
$prodi = $_POST['prodi'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];

// menginput data ke database
mysqli_query($koneksi, "INSERT INTO mahasiswa (nim, nama, semester, gender, prodi, email, telepon, alamat) VALUES ('$nim', '$nama', '$semester', '$gender', '$prodi', '$email', '$telepon', '$alamat')");
 
// mengalihkan halaman kembali ke index.php
header("location:tampilmhs.php");
 
?>