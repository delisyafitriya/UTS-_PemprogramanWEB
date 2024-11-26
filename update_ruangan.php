<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_ruangan    = $_POST['id_ruangan'];
$nama_ruangan      = $_POST['nama_ruangan'];
$kapasitas = $_POST['kapasitas'];
$lokasi   = $_POST['lokasi'];


//query update data ke dalam database berdasarkan ID
$query = "UPDATE ruangan SET nama_ruangan = '$nama_ruangan',  kapasitas = '$kapasitas',  lokasi = '$lokasi' WHERE id_ruangan = '$id_ruangan'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: tampil_ruangan.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>