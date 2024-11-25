<?php 
session_start();
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data pada tabel user dengan username dan password yang sesuai
$data = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");

// cek apakah ada data yang ditemukan
if (mysqli_num_rows($data) > 0) {
    // ambil data user
    $user = mysqli_fetch_assoc($data);

    // simpan nama dan username ke dalam session
    $_SESSION['nama_user'] = $user['nama'];
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";

    header("Location: dashboard.php");
} else {   
    echo "<script> alert('Login gagal! Username atau password tidak benar.');</script>";
    echo "<script> window.location ='sign-in.php';</script>";
}
?>
