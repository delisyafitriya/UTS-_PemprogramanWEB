<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nidn    = $_POST['nidn'];
$nama      = $_POST['nama'];
$gender = $_POST['gender'];
$email   = $_POST['email'];
$telepon      = $_POST['telepon'];
$alamat      = $_POST['alamat'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE dosen SET nama = '$nama',  gender = '$gender',  email = '$email', telepon = '$telepon', alamat = '$alamat' WHERE nidn = '$nidn'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: tampil_dosen.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>