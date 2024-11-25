<?php 
// koneksi database
include 'koneksi.php';

// Cek apakah parameter plat_mobil ada
if (isset($_GET['id_transaksi'])) {
    // menangkap data plat_mobil yang dikirim dari URL dan mengamankannya
    $id_transaksi = mysqli_real_escape_string($koneksi, $_GET['id_transaksi']);

    // menghapus data dari database
    $query = "DELETE FROM transaksi WHERE id_transaksi='$id_transaksi'";
    if (mysqli_query($koneksi, $query)) {
        // Jika berhasil, alihkan halaman kembali ke tables.php
        header("Location: transaksi.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($koneksi);
    }
} else {
    echo "Transaksi Tidak ditemukan!";
}
?>
