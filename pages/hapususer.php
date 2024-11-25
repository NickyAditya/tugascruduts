<?php 
// koneksi database
include 'koneksi.php';

// Cek apakah parameter plat_mobil ada
if (isset($_GET['id_user'])) {
    // menangkap data plat_mobil yang dikirim dari URL dan mengamankannya
    $id_user = mysqli_real_escape_string($koneksi, $_GET['id_user']);

    // menghapus data dari database
    $query = "DELETE FROM user WHERE id_user='$id_user'";
    if (mysqli_query($koneksi, $query)) {
        // Jika berhasil, alihkan halaman kembali ke tables.php
        header("Location: user.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($koneksi);
    }
} else {
    echo "user Tidak ditemukan!";
}
?>
