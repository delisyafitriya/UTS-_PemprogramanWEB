<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$semester = $_POST['semester'];
$gender = $_POST['gender'];
$prodi = $_POST['prodi'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE mahasiswa SET nama = '$nama', semester = '$semester', gender = '$gender', prodi = '$prodi', email = '$email', telepon = '$telepon', alamat = '$alamat' WHERE nim = '$nim'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: tampilmhs.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>