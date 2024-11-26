<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_pengambilanprk = $_POST['id_pengambilanprk'];
$tgl_pengambilan = $_POST['tgl_pengambilan'];
$statuss = $_POST['statuss'];
$jumlah_mhs = $_POST['jumlah_mhs'];
$id_jadwal = $_POST['id_jadwal'];

// menginput data ke database
mysqli_query($koneksi, "INSERT INTO pengambilan_prk (id_pengambilanprk, tgl_pengambilan, statuss,  jumlah_mhs, id_jadwal) VALUES ('$id_pengambilanprk', '$tgl_pengambilan',  '$statuss',  '$jumlah_mhs',  '$id_jadwal')");
 
// mengalihkan halaman kembali ke index.php
header("location:tampil_pengambilan.php");
 
?>