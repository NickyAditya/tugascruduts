<?php 
// koneksi database
include 'koneksi.php';

// Cek apakah parameter plat_mobil ada
if (isset($_GET['plat_mobil'])) {
    // menangkap data plat_mobil yang dikirim dari URL dan mengamankannya
    $plat_mobil = mysqli_real_escape_string($koneksi, $_GET['plat_mobil']);

    // menghapus data dari database
    $query = "DELETE FROM mobil WHERE plat_mobil='$plat_mobil'";
    if (mysqli_query($koneksi, $query)) {
        // Jika berhasil, alihkan halaman kembali ke tables.php
        header("Location: mobil.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($koneksi);
    }
} else {
    echo "Plat mobil tidak ditemukan!";
}
?>
