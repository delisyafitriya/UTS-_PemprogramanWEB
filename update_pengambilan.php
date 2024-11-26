<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_pengambilanprk = $_POST['id_pengambilanprk'];
$tgl_pengambilan = $_POST['tgl_pengambilan'];
$statuss = $_POST['statuss'];
$jumlah_mhs = $_POST['jumlah_mhs'];
$id_jadwal = $_POST['id_jadwal'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE pengambilan_prk SET tgl_pengambilan = '$tgl_pengambilan',  statuss = '$statuss',  jumlah_mhs = '$jumlah_mhs', id_jadwal = '$id_jadwal' WHERE id_pengambilanprk = '$id_pengambilanprk'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: tampil_pengambilan.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>