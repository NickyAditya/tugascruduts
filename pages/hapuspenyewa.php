<?php 
// koneksi database
include 'koneksi.php';

// Cek apakah parameter plat_mobil ada
if (isset($_GET['id_penyewa'])) {
    // menangkap data plat_mobil yang dikirim dari URL dan mengamankannya
    $id_penyewa = mysqli_real_escape_string($koneksi, $_GET['id_penyewa']);

    // menghapus data dari database
    $query = "DELETE FROM penyewa WHERE id_penyewa='$id_penyewa'";
    if (mysqli_query($koneksi, $query)) {
        // Jika berhasil, alihkan halaman kembali ke tables.php
        header("Location: penyewa.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($koneksi);
    }
} else {
    echo "Penyewa Tidak ditemukan!";
}
?>
