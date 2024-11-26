<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_jadwal = $_POST['id_jadwal'];
$mata_kuliah = $_POST['mata_kuliah'];
$hari = $_POST['hari'];
$jam_mulai = $_POST['jam_mulai'];
$jam_selesai = $_POST['jam_selesai'];
$kelas = $_POST['kelas'];
$id_ruangan = $_POST['id_ruangan'];
$nidn = $_POST['nidn'];

// menginput data ke database
mysqli_query($koneksi, "INSERT INTO jadwal_prk (id_jadwal, mata_kuliah, hari, jam_mulai, jam_selesai, kelas, id_ruangan, nidn) VALUES ('$id_jadwal', '$mata_kuliah', '$hari', '$jam_mulai', '$jam_selesai', '$kelas', '$id_ruangan', '$nidn')");
 
// mengalihkan halaman kembali ke index.php
header("location:tampil_jadwal.php");
 
?>