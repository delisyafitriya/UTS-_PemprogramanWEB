<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_asisten    = $_POST['id_asisten'];
$nama      = $_POST['nama'];
$gender = $_POST['gender'];
$email   = $_POST['email'];
$telepon      = $_POST['telepon'];
$alamat      = $_POST['alamat'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE asistenlab SET nama = '$nama',  gender = '$gender',  email = '$email', telepon = '$telepon', alamat = '$alamat' WHERE id_asisten = '$id_asisten'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: tampil_asisten.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>