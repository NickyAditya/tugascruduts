<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $plat_mobil = $_POST['plat_mobil'];
    $merk = $_POST['merk'];
    $nama_mobil = $_POST['nama_mobil'];
    $warna = $_POST['warna'];
    $harga_sewa = $_POST['harga_sewa'];

    $query = "INSERT INTO mobil (plat_mobil, merk, nama_mobil, warna, harga_sewa) VALUES ('$plat_mobil', '$merk', '$nama_mobil', '$warna', '$harga_sewa')";

    if (mysqli_query($koneksi, $query)) {
        header("Location: mobil.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
    mysqli_close($koneksi);
}
?>
