<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_jadwal = $_POST['id_jadwal'];
$mata_kuliah = $_POST['mata_kuliah'];
$hari = $_POST['hari'];
$jam_mulai = $_POST['jam_mulai'];
$jam_selesai = $_POST['jam_selesai'];
$kelas = $_POST['kelas'];
$id_ruangan = $_POST['id_ruangan'];
$nidn = $_POST['nidn'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE jadwal_prk SET mata_kuliah = '$mata_kuliah', hari = '$hari', jam_mulai = '$jam_mulai', jam_selesai = '$jam_selesai', kelas = '$kelas', id_ruangan = '$id_ruangan', nidn = '$nidn' WHERE id_jadwal = '$id_jadwal'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: tampil_jadwal.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>