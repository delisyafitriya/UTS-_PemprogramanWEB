<?php 
session_start();
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$pasword = $_POST['pasword'];

// menyeleksi data pada tabel admin dengan username dan prodi yang sesuai
$data = mysqli_query($koneksi, "SELECT * FROM adminn WHERE username='$username' and pasword='$pasword'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
    $_SESSION['username'] = $username; // Ganti $nim dengan $username
    $_SESSION['status'] = "login";
    header("location:dashboard.php");
}
else{
    echo "<script> alert ('login gagal ! Username dan Password tidak benar ');</script>";
    echo "<script> window.location ='fromlogin.php';</script>";
}
?>
